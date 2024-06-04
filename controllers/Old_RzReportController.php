<?php

class RzReportController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create','update','admin','delete','email'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new RzReport;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['RzReport']))
		{
			$model->attributes=$_POST['RzReport'];
      if (isset($_POST['RzReport']['System']) & $_POST['RzReport']['System']!="") 
        $model->System = implode(",", $_POST['RzReport']['System']);
      else
        $model->System = "";
//      $model->Kunde = implode(",", $_POST['RzReport']['Kunde']);
//      $model->Betroffen = implode(",", $_POST['RzReport']['Betroffen']);
//      $model->Standort = implode(",", $_POST['RzReport']['Standort']);
      if (isset($_POST['RzReport']['Kunde']) & $_POST['RzReport']['Kunde']!='') $model->Kunde = implode(",", $_POST['RzReport']['Kunde']);
      if (isset($_POST['RzReport']['Betroffen']) & $_POST['RzReport']['Betroffen']!='') 
       $model->Betroffen = implode(",", $_POST['RzReport']['Betroffen']);
      else
       $model->Betroffen = '';
      if (isset($_POST['RzReport']['Standort']) & $_POST['RzReport']['Standort']!='') $model->Standort = implode(",", $_POST['RzReport']['Standort']);
      $model->Author=$_SERVER["AUTH_USER"];
      $model->Korrektor=$_SERVER["AUTH_USER"];
//			if($model->save())
//				$this->redirect(array('admin','id'=>$model->Rid));
//		}
			if($model->save()) {
				if (isset($_POST['ohne_email'])) $this->redirect(array('admin'));
        if (isset($_POST['mit_email'])) $this->redirect(array('email','id'=>$model->Rid));
        }
    }    
    $model->Author=$_SERVER["AUTH_USER"];
    $model->Korrektor=$_SERVER["AUTH_USER"];
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RzReport']))
		{
			$model->attributes=$_POST['RzReport'];
      if (isset($_POST['RzReport']['System'])) $model->System = implode(",", $_POST['RzReport']['System']);
      if (isset($model->Kunde) & $model->Kunde!='') $model->Kunde = implode(",", $_POST['RzReport']['Kunde']);
      if (isset($model->Betroffen) & $model->Betroffen!='') $model->Betroffen = implode(",", $_POST['RzReport']['Betroffen']);
      if (isset($model->Standort) & $model->Standort!='') $model->Standort = implode(",", $_POST['RzReport']['Standort']);
      $model->Korrektor=$_SERVER["AUTH_USER"];    
			if($model->save()) {
				if (isset($_POST['ohne_email'])) { unset($model->Rid); $this->redirect(array('admin')); }
        if (isset($_POST['mit_email'])) $this->redirect(array('email','id'=>$model->Rid));
      }
		}
    
    $model->Korrektor=$_SERVER["AUTH_USER"];
    $this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('RzReport');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new RzReport('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RzReport']))
			$model->attributes=$_GET['RzReport'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function actionEmail($id)
	{
		$model=$this->loadModel($id);
    $mail = new RzEmailForm();
    
    //Yii::trace(CVarDumper::dumpAsString($_POST),'error');
    
    // SQL-Anweisung mit drei Platzhaltern ":system", ":kunde" und ":standort"
    $sql="exec usp_RzGetReciever :system, :kunde, :standort";
    $command=Yii::app()->db->createCommand($sql);
    // Ersetzt ":system" durch den tatsächlichen Benutzernamen
    $command->bindValue(":system",$model->Betroffen,PDO::PARAM_STR);
    $command->bindValue(":kunde",$model->Kunde,PDO::PARAM_STR);
    $command->bindValue(":standort",$model->Standort,PDO::PARAM_STR);
    $command->execute();
 
    $text1 = '<html><body><span style="font-family: tahoma,calibri,arial,sans-serif; font-size: 10pt"> Sehr geehrte(r) KeyUser(in),<br>
    <br>
    bei <font color="#e36c09"><b>'.$model->Betroffen."</b></font> ist eine Funktionsstörung aufgetreten:<br>
    <br>
    <b>".$model->Beschreibung."</b><br>
    <br>
    Der IT-Service ist derzeit dabei, die Störung zu beheben.<br>
    So bald die Funktion wiederhergestellt ist erhalten Sie von uns Bescheid.<br>
    <br>
    Vielen Dank für Ihr Verständnis.<br>
    <br>
    Mit freundlichen Grüßen<br>
    <br>
    Ihr IT-Support<br>
    </span></body></html>";
     
    $mail['absender'] = $_SERVER["AUTH_USER"];
    $mail['empfang'] = $command->queryScalar();
    $mail['betreff'] = "Funktionsstörung bei : ".$model->Betroffen;
    $mail['text'] = $text1;


		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RzEmailForm']))
		{
			$mail->attributes=$_POST['RzEmailForm'];

     $sql="EXEC msdb.dbo.sp_send_dbmail
    @profile_name	= 'default', 
    @recipients	= :empfang,
    @importance 	= N'HIGH',
    @subject	= :betreff,
    @body		= :text,
    @body_format 	= N'HTML'";
    
     $command=Yii::app()->db->createCommand($sql);
     // Ersetzt ":system" durch den tatsächlichen Benutzernamen
     $command->bindValue(":empfang",$mail->empfang,PDO::PARAM_STR);
     $command->bindValue(":betreff",$mail->betreff,PDO::PARAM_STR);
     $command->bindValue(":text",$mail->text,PDO::PARAM_STR);
//      // automatically send every new message to available log routes
//     Yii::getLogger()->autoFlush = 1;
//     // when sending a message to log routes, also notify them to dump the message
//     // into the corresponding persistent storage (e.g. DB, email)
//     Yii::getLogger()->autoDump = true;
//     
//      Yii::log(CVarDumper::dumpAsString($command), CLogger::LEVEL_ERROR, 'error');
//      //Yii::trace(CVarDumper::dumpAsString($command),'error');
//      Yii::app()->log->processLogs(null);
     
		 if($command->execute()) {
				$this->redirect(array('admin'));
     }
		}
    
//    $model->Korrektor=$_SERVER["AUTH_USER"];
    $this->render('email',array(
			'model'=>$mail,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=RzReport::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='rz-report-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
