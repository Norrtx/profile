<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\Education;
use common\models\ Skill;
use common\models\Charttemplate;
use common\models\Jobhistory;
use common\models\Profile;
use common\models\Themes;
use common\models\User;
use yii\web\UploadedFile;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','hoho','test2'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionHoho()
    {
      //  $this->layout='from';
        return $this->render('hoho');
    }
    public function actionTest2()
    {                     
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
            
           $profilemodel = new Profile();   
           $nameTH=$request->post('fullname_th');
           $nameEN=$request->post('fullname_en');
           $gender=$request->post('sex');
           $birthday=$request->post('birth_date');
           $Age=$request->post('age');
           $city=$request->post('city');
           $Address=$request->post('address');
           $state=$request->post('state');
           $zip=$request->post('zip');
           $latitude=$request->post('latitude');
           $longitude=$request->post('longitude');
           $mail=$request->post('mail');
           $facebook=$request->post('facebook');
           $link=$request->post('web_other_value');
           $status=$request->post('');
           $description=$request->post('introduce');
           $pathFolder = "../../frontend/web/uploads/" . str_pad($id, 5, '0', STR_PAD_LEFT) . "/";
            if (!file_exists($pathFolder)) {
                if (mkdir($pathFolder, 0755, true)) { } else {
                         die('failed');
                }
            }
                $pro_img = UploadedFile::getInstanceByName('pro_img');
        
            if (isset($pro_img->error) && $pro_img->error == 0) {
                $curFileName = $id . '_' . time() . '_';
                $imageName = '.' . $pro_img->getExtension();
                $path = $pathFolder . pathinfo($curFileName, PATHINFO_FILENAME);
               try {
                   if ($pro_img->saveAs($path . $imageName)) {
                     $slip_name = $curFileName.$imageName;
                     $profilemodel->pro_img = $slip_name;
                    }
               } catch (Exception $e) {
                  }
            }           
            
            $profilemodel->nameTH = $nameTH;
            $profilemodel->nameEN = $nameEN;
            $profilemodel->gender = $gender;
            $profilemodel->birthday =  strtotime($birthday);
            $profilemodel->Age = $Age;
            $profilemodel->city = $city;
            $profilemodel->address = $Address;
            $profilemodel->state = $state;
            $profilemodel->zip = $zip;
            $profilemodel->latitude = $latitude;
            $profilemodel->longitude = $longitude;
            $profilemodel->mail = $mail;
            $profilemodel->facebook = $facebook;
            $profilemodel->link = $link;
            $profilemodel->user_id = $id;
            $profilemodel->description = $description;
            $profilemodel->date_create = time();
            $profilemodel->status = $status;
            $profilemodel->save();
        }   
        
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
             
            $name = $request->post('skill');
            $score=$request->post('skillvalue');
            $maxscore=$request->post('maxscore');
            $chart_type=$request->post('');
         
            $status=$request->post('');
           
            foreach ($name as $key => $skill) {
                if ($skill !=null){    

                    $skillmodel = new Skill();
                    $skillmodel->name = ($skill != null) ? $skill : null;
                    $skillmodel->score =($score[$key] != null) ?  $score[$key] : null;
                    $skillmodel->user_id = $id;
                    $skillmodel->maxscore = ($maxscore[$key] != null) ?  $maxscore[$key] : null;
                    $skillmodel->chart_type = $chart_type;
                    $skillmodel->date_create = time();
               
                    $skillmodel->status = $status;
                     $skillmodel->save();
                   
                }    
                
            }
        } 
        
       
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
         if ($request->isPost) {
            
           $school_name=$request->post('name');
           $date_from=$request->post('education');
           $date_to=$request->post('educationyear');
           $gpa=$request->post('gpa');
           $faculty=$request->post('faculty');
        
            
           foreach ($school_name as $key => $name) {
                if($name !=null){
                   $educationmodel = new Education();
                   $educationmodel->school_name = ($name != null) ? $name : null;
                   $educationmodel->date_from =($date_from[$key] != null) ?  $date_from[$key] : null;
                   $educationmodel->date_to = ($date_to[$key] != null) ?  $date_to[$key] : null;
                   $educationmodel->faculty = ($faculty[$key] != null) ?  $faculty[$key] : null;
                   $educationmodel->gpa = ($gpa[$key] != null) ?  $gpa[$key] : null;
                   $educationmodel->user_id = $id;
                   $educationmodel->date_create = time();
                   $educationmodel->save();
                }   
           } 
         }  
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
         if ($request->isPost) {
          
            $company_name=$request->post('company');
            $position=$request->post('position');
            $date_from=$request->post('experience');
            $date_to=$request->post('experienceyear');
           
       
            
           foreach ($company_name as $key => $company) {
                if($company !=null){
                 

                    $jobhistorymodel = new Jobhistory();
                    $jobhistorymodel->company_name = ($company != null) ? $company : null;
                    $jobhistorymodel->position =($position[$key] != null) ?  $position[$key] : null;
                    $jobhistorymodel->date_from = ($date_from[$key] != null) ?  $date_from[$key] : null;
                    $jobhistorymodel->date_to = ($date_to[$key] != null) ?  $date_to[$key] : null;
                    
                    $jobhistorymodel->user_id = $id;
                    $jobhistorymodel->date_create =time();
                    $jobhistorymodel->save();
                }

           }  
         }
         return $this->render('test2');  //<--end-->
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
         if ($request->isPost) {
            
             
            $name=$request->post('namem');
            $mail=$request->post('mail');
            $des=$request->post('description');
            $link=$request->post('link');
            $city=$request->post('city');
            $state=$request->post('state');
            $zip=$request->post('zip');
             
            
            $charttemplatemodel = new Charttemplate();
            $charttemplatemodel->name = $name;
            $charttemplatemodel->mail = $mail;
            $charttemplatemodel->discription = $des;
            $charttemplatemodel->link = $link;
            $charttemplatemodel->user_id = $id;
            $charttemplatemodel->state = $state;
            $charttemplatemodel->city = $city;
            $charttemplatemodel->zip = $zip;
             
            $charttemplatemodel->save();
         }
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
         if ($request->isPost) {
            
           $name=$request->post('namem');
           $mail=$request->post('mail');
           $des=$request->post('description');
           $link=$request->post('link');
           $city=$request->post('city');
           $state=$request->post('state');
           $zip=$request->post('zip');
            
           
           $jobhistorymodel = new Jobhistorry();
             $jobhistorymodel->name = $name;
             $jobhistorymodel->mail = $mail;
             $jobhistorymodel->discription = $des;
             $jobhistorymodel->link = $link;
             $jobhistorymodel->user_id = $id;
             $jobhistorymodel->state = $state;
             $jobhistorymodel->city = $city;
             $jobhistorymodel->zip = $zip;
            
             $jobhistorymodel->save();
         }
        return $this->render('test2');
    }
    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $this->layout='mainlogin';

        $model = new LoginForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
