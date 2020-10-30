<?php
use common\models\Profile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="content-area columns large-12">
		
        <section id="avatar">
             <div class="row">
               <div class="column small-3">
                   <div class="icon-photo" ><i class="fa fa-user" aria-hidden="true"></i></div>
                   
               </div>
               <div class="column small-9">
                    <label class="text-photo">Photos</label><label class="experience_demo">(Use vertical image)</label>
                    <input  id="pro_img"  type="file" name="pro_img"  >
               </div>
           
        </section>
       
       <section id="profile">
           <h2 class="post-headline-primary"><i class="fa fa-user" aria-hidden="true"></i> Profile</h2>	
           <div class="row">
               <div class="small-3 columns">
                   <label>Fullname EN</label>
               </div>
               <!-- <div class="small-3 columns">
                   <select id="prefix" name="prefix">
                       <option value="Mr.">Mr.</option>
                       <option value="Ms.">Ms.</option>
                       <option value="Miss">Miss</option>
                       <option value="Mrs">Mrs.</option>
                   </select>
               </div> -->
               <div class="small-9 columns">
                    <input value="<?= $profilemodel->nameEN ?>" type="text" name="fullname_en" placeholder="Eng Language">
               </div>
           </div>
           <div class="row">
               <div class="small-3 column">
                   <label>Fullname TH</label>
               </div>
               <div class="small-9 column">
                    <input value="<?= $profilemodel->nameTH ?>"type="text" name="fullname_th" placeholder="Thai Language"> 
               </div>
           </div>
           <div class="row">
               <div class="small-3 column">
                   <label>Gender</label>
               </div>
               <div class="small-3 column">
                    <select id="sex" name="sex">
                        <option value="male">Male</option>
                       <option value="female">Female</option>
                   </select>
               </div>
               <div class="small-6 column"></div>
           </div>
           <div class="row">
               <div class="small-3 column">
                   <label>Birthday</label>
               </div>
               <div class="small-7 column" >
               <?= 
                   DatePicker::widget([
                       'name' => 'birth_date2',
                       'value' => date("d-m-Y", ($profilemodel->birthday)), 
                       'pluginOptions' => [
                           'autoclose'=>true,
                           'format' => 'dd-mm-yyyy'
                       ]
                   ]);

               ?>
               </div>
               
               <div class="row">
               <div class="small-3 column">
                   <label>Age</label>
               </div>
           
               <div class="small-3 column">
                   <input value="<?= $profilemodel->Age ?>"type="text" id="age" name="age"readonly > 
               </div>
               <div class="small-6 column">
                   <label>Years old</label>
               </div>
               </script>
           </div>    
         </section>       
         <section id="contact">		
           <h2 class="post-headline-primary"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact</h2>	          
                <div class="row">
                    <div class="small-3 column">
                    <label>Email</label>
                </div>
                    <div class="small-9 column">
                        <input value="<?= $profilemodel->mail ?>"type="text" name="mail"placeholder="Email">
                    </div>
                </div>
           <div class="row">
               <div class="small-3 column">
                   <label>Address</label>
               </div>
               <div class="small-9 column">
                   <input value="<?= $profilemodel->city ?>"  name="city" type="text" class="form-control" placeholder="Prefecture"><br>
               </div>
               <div class="small-9 column">
                   <input value="<?= $profilemodel->state ?>"  name="state" type="text" class="form-control" placeholder="State">
               </div><br>	<div class="small-3 column">
                   <label>Zip code</label>
               </div>
               <div class="small-9 column">
                   <input value="<?= $profilemodel->zip ?>" name="zip" type="text" class="form-control" placeholder="zip code">
               </div><br>
               <div class="small-9 column">
                   <input value="<?= $profilemodel->latitude ?>" name="latitude" type="text" class="form-control" placeholder="latitude">
               </div><br>
               <div class="small-3 column">
                   <label>Latitude</label>
               </div>  
                <div class="small-9 column">
                   <input value="<?= $profilemodel->longitude ?>"name="longitude" type="text" class="form-control" placeholder="longitude">
              </div><br>
           </div>
         </section>


       <section id="social">	
           <h2 class="post-headline-primary"><i class="fa fa-globe" aria-hidden="true"></i> Social</h2>
           <div class="row">
               <div class="small-3 column">
                   <label>Facebook</label>
               </div>
               <div class="small-9 column">
                   <input value="<?= $profilemodel->facebook ?>" type="text" name="facebook" placeholder="Name / ID">
               </div>
           </div>
       
       </section>
       <section id="web">
			
			<h2 class="post-headline-primary"><i class="fa fa-share-alt" aria-hidden="true"></i> Website</h2>
			<div class="row">
				<div class="small-3 column">
					<label>Portfolio</label>
				</div>
				<div class="small-9 column">
					<input  type="text" name="web_portfollio" placeholder="Link...">
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<input  type="text" name="web_other_name" placeholder="Web other">
				</div>
				<div class="small-9 column">
					<input value="<?= $profilemodel->link ?>" type="text" name="web_other_value" placeholder="Link...">
				</div>
			</div>		
		</section>
        <div class="content-area columns large-12">
		
		<section id="introduce">	
			<h2 class="post-headline-primary"><i class="fa fa-credit-card" aria-hidden="true"></i> Describe yourself</h2>	
			<div class="row">
				<div class="small-12 column">
					<textarea type="text" rows="5" name="introduce" placeholder="message..."><?= $profilemodel->description ?></textarea>
				</div>
			</div>
		</section>	
        <link rel="stylesheet" id="tiwanon-style-css"  href="https://campus.campus-star.com/resume/assets/css/style.min.css?ver=201804251416" type="text/css" media="all" />
    </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#age").change(function(){
                    alert("The text has been changed.");
                });
                    
                $('input[name=birth_date2]').change(function() {
                    var year = new Date().getFullYear();
                    var year2 = $(this).val();
                    var res = year2.substring(6, 10);
                    var age = year - parseInt(res);
                    // var integer = parseInt(year2);
                    // console.log(year2);
                    $("#age").val(age);
                });

            });
        </script>
    <div class="form-group small-7 column">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    

    <?php ActiveForm::end(); ?>

</div>
