<?php

class NavSessionsController extends Controller
{
	public function actionIndex()
	{
//		$model=new NavSessions('search');

    $dataProvider = new CActiveDataProvider( 'NavSessions');
    $dataProvider->setSort( array( 
                  'defaultOrder' => array('Anzahl' => SORT_ASC )
                ));
    
/*		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NavSessions']))
			$model->attributes=$_GET['NavSessions'];
*/
		$this->render('index', array( 'dataprovider' => $dataProvider, ));
    
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}