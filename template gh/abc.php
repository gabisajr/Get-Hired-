<form method="post" action="editsubmit.php?id=<?php echo $id ?>">
	
		<table>
			<tbody>
				<tr>
				<td>
					<label for="fullname"></label>
					<input type="text" name="fullname" value="<?php echo $name ?>" style="margin-top: 75px" required><br>
					<label for="email"></label>
					<input type="text" name="email" value="<?php echo $email;?>" ><br>
					<label for="DOB" ></label>
					<input type="date" name="date" value="<?php echo $dob;?>" required><br>
					<label for="field"></label>
					<select name="field">
                    <option value="noselection"<?php if ($row['field'] == "noselection") print("NOTSelected"); ?>>Field</option>
					<option value="csit" <?php if ($row['field'] == "csit") print("Selected"); ?>>CS&IT</option>
					<option value="mkt"<?php if ($row['field'] == "mkt") print("Selected"); ?>>Marketing</option>
					<option value="medical" <?php if ($row['field'] == "medical") print("Selected"); ?>>Medical</option>
					</select><br>
					<label for="degree"></label><select name="degree">
					<option value="noselection" <?php if ($row['degree'] == "noselection") print("NOTSelected"); ?>>Degree</option>
					<option value="bscs"<?php if ($row['degree'] == "bscs") print("Selected"); ?>>BS in Computer Science</option>
					<option value="be" <?php if ($row['degree'] == "be") print("Selected"); ?>>Bachelors in engineering</option>
					<option value="bba" <?php if ($row['degree'] == "bba") print("Selected"); ?>>Bachelors in business administration</option>
					<option value="bs"<?php if ($row['degree'] == "bs") print("Selected"); ?>>BS Media Studies</option>
					<option value="mbbs" <?php if ($row['degree'] == "mbbs") print("Selected"); ?>>MBBS</option></select>
					<br>
					<label for="skills" ></label> <select name="skills">
					<option value="noselection" <?php if ($row['skills'] == "noselection") print("NOTSelected"); ?> >Skills</option>
					<option value="prog" <?php if ($row['skills'] == "prog") print("Selected"); ?>>Programming</option>
					<option value="wd" <?php if ($row['skills'] == "wd") print("Selected"); ?>>Web Developement</option>
					<option value="ad" <?php if ($row['skills'] == "ad") print("Selected"); ?>>App Developement</option>
					<option value="dbms" <?php if ($row['skills'] == "dbms") print("Selected"); ?>>Database Management</option>
					<option value="bigdata" <?php if ($row['skills'] == "bigdata") print("Selected"); ?>>Big Data Analysis</option>
					<option value="comm" <?php if ($row['skills'] == "comm") print("Selected"); ?>>Communication</option>
					<option value="dm" <?php if ($row['skills'] == "dm") print("Selected"); ?>>Digital Marketing</option>
					<option value="pr" <?php if ($row['skills'] == "pr") print("Selected"); ?>>PR Building</option>
					<option value="diag" <?php if ($row['skills'] == "diag") print("Selected"); ?>>Diagonis of pateint</option>
					<option value="surg" <?php if ($row['skills'] == "surg") print("Selected"); ?>>surgery</option>
					<option value="ss" <?php if ($row['skills'] == "ss") print("Selected"); ?>>sutures and stitches</option>
					</select>
					<br>
                    <input type="year" name="gradyear" value="<?php echo $gradyear;?>" required> <br>
                    <p class="p">Edit your form by clicking on the button.</p>
                    <input type="submit" name="submit" value="edit">
                    </td>s
                    </tr>
                    </tbody>

			</table>	
								
</form>