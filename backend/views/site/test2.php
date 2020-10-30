<?php

use kartik\datetime\DateTimePicker;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Skill */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin([
	'options' => ['enctype' => 'multipart/form-data']
]); ?>
<div id="step-2" class="row">
	<header class="entry-header">
		<h2 class="entry-title">แบบกรอกประวัติทหาร</h2>
	</header>
	<div class="content-area columns large-6">

		<section id="avatar">
			<div class="row">
				<div class="column small-3">
					<div class="icon-photo"><i class="fa fa-user" aria-hidden="true"></i></div>
				</div>
				<div class="column small-9">
					<label class="text-photo">รูปประจำตัวทหาร</label><label class="experience_demo">(Use vertical image)</label>
					<input id="pro_img" type="file" name="pro_img">
				</div>
				<!-- <input type="checkbox" id="queue-order" name="Queue[order]" value="1" checked> -->
		</section>

		<section id="profile">
			<h2 class="post-headline-primary"><i class="fa fa-user" aria-hidden="true"></i> Profile</h2>
			<div class="row">
				<div class="small-3 columns">
					<label>ชื่อภาษาอังกฤษ</label>
				</div>
				
				<div class="small-9 columns">
					<input required="" type="text" name="fullname_en" placeholder="ชื่อภาษาอังกฤษ">
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>ชื่อภาษาไทย</label>
				</div>
				<div class="small-9 column">
					<input required="" type="text" name="fullname_th" placeholder="ชื่อภาษาไทย">
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>เพศ</label>
				</div>
				<div class="small-3 column">
					<select id="sex" name="sex">
						<option value="ชาย">ชาย</option>
						<option value="หญิง">หญิง</option>
					</select>
				</div>
				<div class="small-6 column"></div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>เกิดวันที่</label>
				</div>
				<div class="small-7 column">
					<?=
						DatePicker::widget([
							'name' => 'birth_date',
							'value' => '12-12-2541',
							'language' => 'th', // Thai B.E.
							'pluginOptions' => [
								'autoclose' => true,
								'format' => 'dd-mm-yyyy'
							]
						]);

					?>
				</div>

				<div class="row">
					<div class="small-3 column">
						<label>อายุ</label>
					</div>

					<div class="small-3 column">
						<input type="text" id="age" name="age" readonly>
					</div>
					<div class="small-6 column">
						<label>ปี</label>
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
					<input  type="text" name="mail" placeholder="Email">
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<label>Address</label>
				</div>
				<div class="small-9 column">
					<input required="" name="city" type="text" class="form-control" placeholder="Prefecture"><br>
				</div>
				<div class="small-3 column">
					<label>AddressMOM</label>
				</div>
				<div class="small-9 column">
					<input  name="address" type="text" class="form-control" placeholder="Prefecture"><br>
				</div>
				<div class="small-9 column">
					<input  name="state" type="text" class="form-control" placeholder="State">
				</div><br>
				<div class="small-3 column">
					<label>Zip code</label>
				</div>
				<div class="small-9 column">
					<input  name="zip" type="text" class="form-control" placeholder="zip code">
				</div><br>
				<div class="small-9 column">
					<input name="latitude" type="text" class="form-control" placeholder="latitude">
				</div><br>
				<div class="small-3 column">
					<label>Latitude</label>
				</div>
				<div class="small-9 column">
					<input name="longitude" type="text" class="form-control" placeholder="longitude">
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
					<input type="text" name="facebook" placeholder="Name / ID">
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
					<input type="text" name="web_portfollio" placeholder="Link...">
				</div>
			</div>
			<div class="row">
				<div class="small-3 column">
					<input type="text" name="web_other_name" placeholder="Web other">
				</div>
				<div class="small-9 column">
					<input type="text" name="web_other_value" placeholder="Link...">
				</div>
			</div>
		</section>

		<!-- <section id="hobby">			
			<h2 class="post-headline-primary"><i class="fa fa-universal-access" aria-hidden="true"></i> Hobbies</h2>	
			<div class="row">
				<div class="small-12 column">
					<input type="text" name="hobby1">
				</div>
			</div>		
			<div class="row">
				<div class="small-12 column">
					<input type="text" name="hobby2">
				</div>
			</div>			
			<div class="row">
				<div class="small-12 column">
					<input type="text" name="hobby3">
				</div>
			</div>
			<div class="row">
				<div class="small-12 column">
					<input type="text" name="hobby4">
				</div>
			</div>
		</section>	 -->

		<!-- <section id="interest">			
			<h2 class="post-headline-primary"><i class="fa fa-heart-o" aria-hidden="true"></i> Interest</h2>	
			<div class="row">
				<div class="small-12 column">
					<input type="text" name="interest1">
				</div>
			</div>
			<div class="row">
				<div class="small-12 column">
					<input type="text" name="interest2">
				</div>
			</div>	
			<div class="row">
				<div class="small-12 column">
					<input type="text" name="interest3">
				</div>
			</div>
			<div class="row">
				<div class="small-12 column">
					<input type="text" name="interest4">
				</div>
			</div>
		</section>	 -->

	</div> <!-- content-area columns large-6 -->

	<div class="content-area columns large-6">

		<section id="introduce">
			<h2 class="post-headline-primary"><i class="fa fa-credit-card" aria-hidden="true"></i> Describe yourself</h2>
			<div class="row">
				<div class="small-12 column">
					<textarea type="text" rows="5" name="introduce" placeholder="message..."></textarea>
				</div>
			</div>
		</section>

		<section id="experience">
			<h2 class="post-headline-primary"><i class="fa fa-briefcase" aria-hidden="true"></i> Experience</h2>
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1">
						<label>Since </label>
					</div>
					<div class="column small-3">
						<select name="experience[]" class="experience_select">
							<?php
							for ($x = 2019; $x >= 2000; $x--) {
								echo '<option value=' . $x . '>' . $x . '</option>';
							}
							?>
						</select>
					</div>
					<div class="column small-1">
						<label>to </label>
					</div>
					<div class="column small-3">
						<select name="experienceyear[]" class="experience_select">
							<?php
							for ($x = 2019; $x >= 2000; $x--) {
								echo '<option value=' . $x . '>' . $x . '</option>';
							}
							?>
						</select>
					</div>
					<div class="column small-4">
						<label class="experience_demo">Demo Since 2014 to 2016</label>
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-2">
						<label> Company </label>
					</div>
					<div class="column small-4">
						<input type="text" name="company[]" class="input-company">
					</div>
					<div class="column small-2">
						<label> Position </label>
					</div>
					<div class="column small-4">
						<input type="text" name="position[]" class="input-position">
					</div>
				</div>
			</div>
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1">
						<label>Since </label>
					</div>
					<div class="column small-3">
						<select name="experience[]" class="experience_select">
							<?php
							for ($x = 2019; $x >= 2000; $x--) {
								echo '<option value=' . $x . '>' . $x . '</option>';
							}
							?>
						</select>
					</div>
					<div class="column small-1">
						<label>to </label>
					</div>
					<div class="column small-3">
						<select name="experienceyear[]" class="experience_select">
							<?php
							for ($x = 2019; $x >= 2000; $x--) {
								echo '<option value=' . $x . '>' . $x . '</option>';
							}
							?>
						</select>
					</div>
					<div class="column small-4">
						<label class="experience_demo">Demo Since 2014 to 2016</label>
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-2">
						<label> Company </label>
					</div>
					<div class="column small-4">
						<input type="text" name="company[]" class="input-company">
					</div>
					<div class="column small-2">
						<label> Position </label>
					</div>
					<div class="column small-4">
						<input type="text" name="position[]" class="input-position">
					</div>
				</div>
			</div>
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1">
						<label>Since </label>
					</div>
					<div class="column small-3">
						<select name="experience[]" class="experience_select">
							<?php
							for ($x = 2019; $x >= 2000; $x--) {
								echo '<option value=' . $x . '>' . $x . '</option>';
							}
							?>
						</select>
					</div>
					<div class="column small-1">
						<label>to </label>
					</div>
					<div class="column small-3">
						<select name="experienceyear[]" class="experience_select">
							<?php
							for ($x = 2019; $x >= 2000; $x--) {
								echo '<option value=' . $x . '>' . $x . '</option>';
							}
							?>
						</select>
					</div>
					<div class="column small-4">
						<label class="experience_demo">Demo Since 2014 to 2016</label>
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-2">
						<label> Company </label>
					</div>
					<div class="column small-4">
						<input type="text" name="company[]" class="input-company">
					</div>
					<div class="column small-2">
						<label> Position </label>
					</div>
					<div class="column small-4">
						<input type="text" name="position[]" class="input-position">
					</div>
				</div>
			</div>
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1">
						<label>Since </label>
					</div>
					<div class="column small-3">
						<select name="experience[]" class="experience_select">
							<?php
							for ($x = 2019; $x >= 2000; $x--) {
								echo '<option value=' . $x . '>' . $x . '</option>';
							}
							?>
						</select>
					</div>
					<div class="column small-1">
						<label>to </label>
					</div>
					<div class="column small-3">
						<select name="experienceyear[]" class="experience_select">
							<?php
							for ($x = 2019; $x >= 2000; $x--) {
								echo '<option value=' . $x . '>' . $x . '</option>';
							}
							?>
						</select>
					</div>
					<div class="column small-4">
						<label class="experience_demo">Demo Since 2014 to 2016</label>
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-2">
						<label> Company </label>
					</div>
					<div class="column small-4">
						<input type="text" name="company[]" class="input-company">
					</div>
					<div class="column small-2">
						<label> Position </label>
					</div>
					<div class="column small-4">
						<input type="text" name="position[]" class="input-position">
					</div>
				</div>
			</div>
		</section>

		<section id="education" class="row column">
			<h2 class="post-headline-primary"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Graduation</h2>
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1">
						<label>Since </label>
					</div>
					<div class="column small-3">
						<select name="education[]" class="education_select">
							<?php
							for ($x = 2019; $x >= 2000; $x--) {
								echo '<option value=' . $x . '>' . $x . '</option>';
							}
							?>
						</select>
					</div>
					<div class="column small-1">
						<label>to </label>
					</div>
					<div class="column small-3">
						<select name="educationyear[]" class="education_select">
							<?php
							for ($x = 2019; $x >= 2000; $x--) {
								echo '<option value=' . $x . '>' . $x . '</option>';
							}
							?>
						</select>
					</div>
					<div class="column small-4">
						<input type="text" name="faculty[]" class="input-faculty" placeholder="Faculty">
						<input type="text" name="gpa[]" class="input-faculty" placeholder="GPA">
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-1">&nbsp;</div>
					<div class="column small-4">
						<select name="degree1" class="degree_select">
							<option value="">Degree</option>
							<option value="Bachelor of Arts">Bachelor of Arts</option>
							<option value="Master of Arts">Master of Arts</option>
							<option value="Doctor of Philosophy">Doctor of Philosophy</option>
							<option value="High Vocational Certificate">High Vocational Certificate</option>
							<option value="Vocational Certificate">Vocational Certificate</option>
							<option value="Senior High School">Senior High School</option>
						</select>
					</div>
					<div class="column small-7">
						<input type="text" name="name[]" class="input-academy" placeholder="Academy">
					</div>
				</div>
			</div>
			<div class="row boxgray">
				<div class="small-12 column">
					<div class="column small-1">
						<label>Since </label>
					</div>
					<div class="column small-3">
						<select name="education[]" class="education_select">
							<?php
							for ($x = 2019; $x >= 2000; $x--) {
								echo '<option value=' . $x . '>' . $x . '</option>';
							}
							?>
						</select>
					</div>
					<div class="column small-1">
						<label>to </label>
					</div>
					<div class="column small-3">
						<select name="educationyear[]" class="education_select">
							<?php
							for ($x = 2019; $x >= 2000; $x--) {
								echo '<option value=' . $x . '>' . $x . '</option>';
							}
							?>
						</select>
					</div>
					<div class="column small-4">
						<input type="text" name="faculty[]" class="input-faculty" placeholder="Faculty">
						<input type="text" name="gpa[]" class="input-faculty" placeholder="GPA">
					</div>
				</div>
				<div class="small-12 column">
					<div class="column small-1">&nbsp;</div>
					<div class="column small-4">
						<select name="degree2" class="degree_select">
							<option value="">Degree</option>
							<option value="Bachelor of Arts">Bachelor of Arts</option>
							<option value="Master of Arts">Master of Arts</option>
							<option value="Doctor of Philosophy">Doctor of Philosophy</option>
							<option value="High Vocational Certificate">High Vocational Certificate</option>
							<option value="Vocational Certificate">Vocational Certificate</option>
							<option value="Senior High School">Senior High School</option>
						</select>
					</div>
					<div class="column small-7">
						<input type="text" name="name[]" class="input-academy" placeholder="Academy">
					</div>
				</div>
		</section>
		<section id="skill">
			<h2 class="post-headline-primary"><i class="fa fa-star-o" aria-hidden="true"></i> Skills</h2>
			<div class="row">
				<div class="small-9 column"><input type="text" name="skill[]" placeholder="NameSkill"></div>
				<div class="small-3 column"><input type="text" name="skillvalue[]" placeholder="Score"></div>
				<div class="small-3 column"><input type="text" name="maxscore[]" placeholder="Maxscore"></div>
			</div>
			<div class="row">
				<div class="small-9 column"><input type="text" name="skill[]" placeholder="NameSkill"></div>
				<div class="small-3 column"><input type="text" name="skillvalue[]" placeholder="Score"></div>
				<div class="small-3 column"><input type="text" name="maxscore[]" placeholder="Maxscore"></div>
			</div>
			<div class="row">
				<div class="small-9 column"><input type="text" name="skill[]" placeholder="NameSkill"></div>
				<div class="small-3 column"><input type="text" name="skillvalue[]" placeholder="Score"></div>
				<div class="small-3 column"><input type="text" name="maxscore[]" placeholder="Maxscore"></div>
			</div>
			<div class="row">
				<div class="small-9 column"><input type="text" name="skill[]" placeholder="NameSkill"></div>
				<div class="small-3 column"><input type="text" name="skillvalue[]" placeholder="Score"></div>
				<div class="small-3 column"><input type="text" name="maxscore[]" placeholder="Maxscore"></div>
			</div>

		</section>


	</div> <!-- content-area columns large-6 -->

</div> <!-- step 2 -->

<div class="content-area columns large-12">
	<div class="row box-button">
		<button id="btn-preview" class="button round success"><i class="fa fa-search-plus" aria-hidden="true"></i> Preview</button>

		<button id="btn-download" class="button round alert" style="display:none;"><i class="fa fa-floppy-o" aria-hidden="true"></i> Download</button>
		<button id="btn-save" class="button round alert"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
	</div>


	</form>

</div><!-- #content -->



<link rel="stylesheet" id="tiwanon-style-css" href="https://campus.campus-star.com/resume/assets/css/style.min.css?ver=201804251416" type="text/css" media="all" />


<!-- <script type="text/javascript" id="tiwanon-js"  src="https://campus.campus-star.com/resume/assets/js/bundle.min.js?ver=https://"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$("#age").change(function() {
			alert("The text has been changed.");
		});

		$('input[name=birth_date]').change(function() {
			var year = new Date().getFullYear()+543;
			var year2 = $(this).val();
			var res = year2.substring(6, 10);
			var age = year - parseInt(res);
			// var integer = parseInt(year2);
			// console.log(year2);
			$("#age").val(age);
		});

	});
</script>

<?php ActiveForm::end(); ?>