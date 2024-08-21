<?php
		include("connect.php");
		
		if(isset($_POST['b1']) && !empty($_POST['q1']) && !empty($_POST['q2']) 
			 && !empty($_POST['q3'])  && !empty($_POST['q4'])  && !empty($_POST['q5']) 
			 && !empty($_POST['q6'])  && !empty($_POST['q7'])  && !empty($_POST['q8']) 
			 && !empty($_POST['q9'])  && !empty($_POST['q10'])  && !empty($_POST['q11']) 
			 && !empty($_POST['q12'])  && !empty($_POST['q13'])  && !empty($_POST['q14']) 
			 && !empty($_POST['q15'])  && !empty($_POST['q16'])  && !empty($_POST['q17']) 
			 && !empty($_POST['q18'])  && !empty($_POST['q19'])  && !empty($_POST['q20']) 
			 && !empty($_POST['q21'])  && !empty($_POST['q22'])  && !empty($_POST['q23']) 
			 && !empty($_POST['q24'])  && !empty($_POST['q25'])  && !empty($_POST['q26']) 
			 && !empty($_POST['q27'])  && !empty($_POST['q28'])  && !empty($_POST['q29']) )
		{
			$q = mysqli_query($con,"insert into about_teacher set
							  st_name = '".$_POST['q1']."' ,
							  st_roll = '".$_POST['q2']."' ,
							  st_branch = '".$_POST['q3']."' ,
							  st_year = '".$_POST['q4']."' ,
							  teacher_name = '".$_POST['q5']."' ,
							  teacher_dp = '".$_POST['q6']."' ,
							  subject = '".$_POST['q7']."' ,
							  suggestions = '".$_POST['s1']."' ,
							  q1 = '".$_POST['q8']."' ,
							  q2 = '".$_POST['q9']."' ,
							  q3 = '".$_POST['q10']."' ,
							  q4 = '".$_POST['q11']."' ,
							  q5 = '".$_POST['q12']."' ,
							  q6 = '".$_POST['q13']."' ,
							  q7 = '".$_POST['q14']."' ,
							  q8 = '".$_POST['q15']."' ,
							  q9 = '".$_POST['q16']."' ,
							  q10 = '".$_POST['q17']."' ,
							  q11 = '".$_POST['q18']."' ,
							  q12 = '".$_POST['q19']."' ,
							  q13 = '".$_POST['q20']."' ,
							  q14 = '".$_POST['q21']."' ,
							  q15 = '".$_POST['q22']."' ,
							  q16 = '".$_POST['q23']."' ,
							  q17 = '".$_POST['q24']."' ,
							  q18 = '".$_POST['q25']."' ,
							  q19 = '".$_POST['q26']."' ,
							  q20 = '".$_POST['q27']."' ,
							  q21 = '".$_POST['q28']."' ,
							  q22 = '".$_POST['q29']."'     ");
			
			$num = mysqli_insert_id($con);
			if($num>0)
			{
				echo "<script>alert('Feedback Successfully Submited, Thank You!');</script>";
			}
		}
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback for Teacher</title>
    
<style>
*{
	box-sizing: border-box;
}

html{
	font-size:100%;
}

body{
	font-family:Arial, Helvetica, sans-serif;
	font-size:1.2rem;
}

</style>
    
</head>

<body>
		
        <form method="post" name="frm1" action="?">
        	<table width="100%" border="0" cellspacing="8" cellpadding="5">
  <tr>
    <th width="52%" scope="row">Name of the Student : </th>
    <td width="48%"><label>
      <input type="text" name="q1" id="q1" maxlength="50" required/>
    *</label></td>
  </tr>
  <tr>
    <th scope="row">Roll No.</th>
    <td><label>
<input type="text" name="q2" id="q2" maxlength="10" required/>
*</label></td>
  </tr>
  <tr>
    <th scope="row">Branch : </th>
    <td><select name="q3" id="q3">
        <option selected>--Select Branch--</option>
        <option value="CSE">Computer Science Engineering</option>
        <option value="ME">Mechanical Engineering</option>
        <option value="CE">Civil Engineering</option>
        <option value="EE">Electronics Engineering</option>
        <option value="MPE">Mechanical Production Engineering</option>
		<option value="MRE">Mechanical Refrigration Engineering</option>
    </select>
      *</td>
  </tr>
  <tr>
    <th scope="row">Year :</th>
    <td><select name="q4" id="q4">
    	<option selected>--Select Year--</option>
        <option value="1st">Ist Year</option>
        <option value="2nd">IInd Year</option>
        <option value="3rd">IIIrd Year</option>
    </select>
      *</td>
  </tr>
  <tr>
    <th scope="row">Teacher Name : </th>
    <td><label>
      <input type="text" name="q5" id="q5" maxlength="50" required/>
    *</label></td>
  </tr>
  <tr>
    <th scope="row">Department of the Teacher : </th>
    <td><label>
      <select name="q6" id="q6">
      <option selected>--Select Teacher Department--</option>
        <option value="CSE">Computer Science Engineering</option>
        <option value="ME">Mechanical Engineering</option>
        <option value="CE">Civil Engineering</option>
        <option value="EE">Electronics Engineering</option>
        <option value="MPE">Mechanical Production Engineering</option>
		<option value="MRE">Mechanical Refrigration Engineering</option>
      </select>
    *</label></td>
  </tr>
  <tr>
    <th scope="row">Subject Name :</th>
    <td><label>
      <input type="text" name="q7" id="q7" maxlength="50" required/>
      *</label></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div><h2 style="color:#0C9;">This section focuses on Attributes of a Teacher</h2><br>
    </div></th>
    </tr>
  <tr>
    <th scope="row">Punctuality in conducting lectures and practicals*</th>
    <td><p>
      <label>
        <input type="radio" name="q8" value="Excellent" id="q8_0" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q8" value="Very Good" id="q8_1">
        Very Good</label>
      
      <label>
        <input type="radio" name="q8" value="Good" id="q8_2">
        Good</label>
      
      <label>
        <input type="radio" name="q8" value="Average" id="q8_3">
        Average</label>
      
      <label>
        <input type="radio" name="q8" value="Unsatisfactory" id="q8_4">
        Unsatisfactory</label>
      
      <br>
      </p></td>
  </tr>
  <tr>
    <th scope="row">Regularity in conducting lectures and practicals*<br></th>
    <td><label>
      <input type="radio" name="q9" value="Excellent" id="q9_5" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q9" value="Very Good" id="q9_6">
        Very Good</label>
      <label>
        <input type="radio" name="q9" value="Good" id="q9_7">
        Good</label>
      <label>
        <input type="radio" name="q9" value="Average" id="q9_8">
        Average</label>
      <label>
        <input type="radio" name="q9" value="Unsatisfactory" id="q9_9">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">Timely completion of Syllabus*</th>
    <td><label>
      <input type="radio" name="q10" value="Excellent" id="q10_10" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q10" value="Very Good" id="q10_11">
        Very Good</label>
      <label>
        <input type="radio" name="q10" value="Good" id="q10_12">
        Good</label>
      <label>
        <input type="radio" name="q10" value="Average" id="q10_13">
        Average</label>
      <label>
        <input type="radio" name="q10" value="Unsatisfactory" id="q10_14">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">Self Confidence*</th>
    <td><label>
      <input type="radio" name="q11" value="Excellent" id="q11_15" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q11" value="Very Good" id="q11_16">
        Very Good</label>
      <label>
        <input type="radio" name="q11" value="Good" id="q11_17">
        Good</label>
      <label>
        <input type="radio" name="q11" value="Average" id="q11_18">
        Average</label>
      <label>
        <input type="radio" name="q11" value="Unsatisfactory" id="q11_19">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">Communication skills*</th>
    <td><label>
      <input type="radio" name="q12" value="Excellent" id="q12_20" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q12" value="Very Good" id="q12_21">
        Very Good</label>
      <label>
        <input type="radio" name="q12" value="Good" id="q12_22">
        Good</label>
      <label>
        <input type="radio" name="q12" value="Average" id="q12_23">
        Average</label>
      <label>
        <input type="radio" name="q12" value="Unsatisfactory" id="q12_24">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">Class Control and eye contact with the students*</th>
    <td><label>
      <input type="radio" name="q13" value="Excellent" id="q13_25"  required/>
      Excellent</label>
      <label>
        <input type="radio" name="q13" value="Very Good" id="q13_26">
        Very Good</label>
      <label>
        <input type="radio" name="q13" value="Good" id="q13_27">
        Good</label>
      <label>
        <input type="radio" name="q13" value="Average" id="q13_28">
        Average</label>
      <label>
        <input type="radio" name="q13" value="Unsatisfactory" id="q13_29">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">Use of participatory method of teaching*</th>
    <td><label>
      <input type="radio" name="q14" value="Excellent" id="q14_30"  required/>
      Excellent</label>
      <label>
        <input type="radio" name="q14" value="Very Good" id="q14_31">
        Very Good</label>
      <label>
        <input type="radio" name="q14" value="Good" id="q14_32">
        Good</label>
      <label>
        <input type="radio" name="q14" value="Average" id="q14_33">
        Average</label>
      <label>
        <input type="radio" name="q14" value="Unsatisfactory" id="q14_34">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">Use of innovative methods of teaching*</th>
    <td><label>
      <input type="radio" name="q15" value="Excellent" id="q15_35"  required/>
      Excellent</label>
      <label>
        <input type="radio" name="q15" value="Very Good" id="q15_36">
        Very Good</label>
      <label>
        <input type="radio" name="q15" value="Good" id="q15_37">
        Good</label>
      <label>
        <input type="radio" name="q15" value="Average" id="q15_38">
        Average</label>
      <label>
        <input type="radio" name="q15" value="Unsatisfactory" id="q15_39">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">Ability to clarify doubts*</th>
    <td><label>
      <input type="radio" name="q16" value="Excellent" id="q16_45" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q16" value="Very Good" id="q16_46">
        Very Good</label>
      <label>
        <input type="radio" name="q16" value="Good" id="q16_47">
        Good</label>
      <label>
        <input type="radio" name="q16" value="Average" id="q16_48">
        Average</label>
      <label>
        <input type="radio" name="q16" value="Unsatisfactory" id="q16_49">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">Overall Rating of the teacher*</th>
    <td><label>
      <input type="radio" name="q17" value="Excellent" id="q17_40" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q17" value="Very Good" id="q17_41">
        Very Good</label>
      <label>
        <input type="radio" name="q17" value="Good" id="q17_42">
        Good</label>
      <label>
        <input type="radio" name="q17" value="Average" id="q17_43">
        Average</label>
      <label>
        <input type="radio" name="q17" value="Unsatisfactory" id="q17_44">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">Suggestions (If Any)</th>
    <td><label>
      <textarea name="s1" id="s1" cols="45" rows="5"></textarea>
    </label></td>
  </tr>
  <tr>
    <th scope="row">The teacher uses student centric method of teaching*</th>
    <td><label>
      <input type="radio" name="q18" value="Excellent" id="q18_50" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q18" value="Very Good" id="q18_51">
        Very Good</label>
      <label>
        <input type="radio" name="q18" value="Good" id="q18_52">
        Good</label>
      <label>
        <input type="radio" name="q18" value="Average" id="q18_53">
        Average</label>
      <label>
        <input type="radio" name="q18" value="Unsatisfactory" id="q18_54">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">Attendance record of the students is maintained by the teacher*</th>
    <td><label>
      <input type="radio" name="q19" value="Excellent" id="q19_55" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q19" value="Very Good" id="q19_56">
        Very Good</label>
      <label>
        <input type="radio" name="q19" value="Good" id="q19_57">
        Good</label>
      <label>
        <input type="radio" name="q19" value="Average" id="q19_58">
        Average</label>
      <label>
        <input type="radio" name="q19" value="Unsatisfactory" id="q19_59">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">The teacher has an excellent approach towards teaching*</th>
    <td><label>
      <input type="radio" name="q20" value="Excellent" id="q20_60" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q20" value="Very Good" id="q20_61">
        Very Good</label>
      <label>
        <input type="radio" name="q20" value="Good" id="q20_62">
        Good</label>
      <label>
        <input type="radio" name="q20" value="Average" id="q20_63">
        Average</label>
      <label>
        <input type="radio" name="q20" value="Unsatisfactory" id="q20_64">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">The teacher illustrates concepts through examples and practical application*</th>
    <td><label>
      <input type="radio" name="q21" value="Excellent" id="q21_65" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q21" value="Very Good" id="q21_66">
        Very Good</label>
      <label>
        <input type="radio" name="q21" value="Good" id="q21_67">
        Good</label>
      <label>
        <input type="radio" name="q21" value="Average" id="q21_68">
        Average</label>
      <label>
        <input type="radio" name="q21" value="Unsatisfactory" id="q21_69">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">The teacher informs the students about the learning objectives and course outcomes*</th>
    <td><label>
      <input type="radio" name="q22" value="Excellent" id="q22_70" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q22" value="Very Good" id="q22_71">
        Very Good</label>
      <label>
        <input type="radio" name="q22" value="Good" id="q22_72">
        Good</label>
      <label>
        <input type="radio" name="q22" value="Average" id="q22_73">
        Average</label>
      <label>
        <input type="radio" name="q22" value="Unsatisfactory" id="q22_74">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">The teacher encourages participation and discussion in the class*</th>
    <td><label>
      <input type="radio" name="q23" value="Excellent" id="q23_75" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q23" value="Very Good" id="q23_76">
        Very Good</label>
      <label>
        <input type="radio" name="q23" value="Good" id="q23_77">
        Good</label>
      <label>
        <input type="radio" name="q23" value="Average" id="q23_78">
        Average</label>
      <label>
        <input type="radio" name="q23" value="Unsatisfactory" id="q23_79">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">The teacher gives regular and timely feedback on the performance of the students*</th>
    <td><label>
      <input type="radio" name="q24" value="Excellent" id="q24_80" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q24" value="Very Good" id="q24_81">
        Very Good</label>
      <label>
        <input type="radio" name="q24" value="Good" id="q24_82">
        Good</label>
      <label>
        <input type="radio" name="q24" value="Average" id="q24_83">
        Average</label>
      <label>
        <input type="radio" name="q24" value="Unsatisfactory" id="q24_84">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">The teacher’s attitude towards the students is friendly &amp; helpful*</th>
    <td><label>
      <input type="radio" name="q25" value="Excellent" id="q25_85" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q25" value="Very Good" id="q25_86">
        Very Good</label>
      <label>
        <input type="radio" name="q25" value="Good" id="q25_87">
        Good</label>
      <label>
        <input type="radio" name="q25" value="Average" id="q25_88">
        Average</label>
      <label>
        <input type="radio" name="q25" value="Unsatisfactory" id="q25_89">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">The teacher facilitates the students to overcome their weakness*</th>
    <td><label>
      <input type="radio" name="q26" value="Excellent" id="q26_90" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q26" value="Very Good" id="q26_91">
        Very Good</label>
      <label>
        <input type="radio" name="q26" value="Good" id="q26_92">
        Good</label>
      <label>
        <input type="radio" name="q26" value="Average" id="q26_93">
        Average</label>
      <label>
        <input type="radio" name="q26" value="Unsatisfactory" id="q26_94">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">The teacher helps students irrespective of their background, gender etc.*</th>
    <td><label>
      <input type="radio" name="q27" value="Excellent" id="q27_95" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q27" value="Very Good" id="q27_96">
        Very Good</label>
      <label>
        <input type="radio" name="q27" value="Good" id="q27_97">
        Good</label>
      <label>
        <input type="radio" name="q27" value="Average" id="q27_98">
        Average</label>
      <label>
        <input type="radio" name="q27" value="Unsatisfactory" id="q27_99">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">The teacher is available and accessible in the Department after lecture timings*</th>
    <td><label>
      <input type="radio" name="q28" value="Excellent" id="q28_100" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q28" value="Very Good" id="q28_101">
        Very Good</label>
      <label>
        <input type="radio" name="q28" value="Good" id="q28_102">
        Good</label>
      <label>
        <input type="radio" name="q28" value="Average" id="q28_103">
        Average</label>
      <label>
        <input type="radio" name="q28" value="Unsatisfactory" id="q28_104">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th scope="row">Before beginning the lecture, the teacher follows the concept of observing ‘one minute silence of the whole class’*</th>
    <td><label>
      <input type="radio" name="q29" value="Excellent" id="q29_105" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q29" value="Very Good" id="q29_106">
        Very Good</label>
      <label>
        <input type="radio" name="q29" value="Good" id="q29_107">
        Good</label>
      <label>
        <input type="radio" name="q29" value="Average" id="q29_108">
        Average</label>
      <label>
        <input type="radio" name="q29" value="Unsatisfactory" id="q29_109">
        Unsatisfactory</label>
      <br></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><label>
      <input type="submit" name="b1" id="b1" value="Submit Feedback">
    </label></th>
    </tr>
          </table>

        </form>
    
</body>
</html>
