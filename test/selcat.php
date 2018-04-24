<?php
	session_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Quiz Upload</title>
    <link rel="stylesheet" type="text/css" href="view.css" media="all">
    <script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" style="background-color:white;">

<img id="top" src="top.png" alt="">
<div id="form_container" style="background-color:white;">

    <h1><a>Quiz Upload</a></h1>
    <form id="form_6060" class="appnitro" style="background-color: white;" method="post" action="">
        <div class="form_description">
            <h2>Quiz Upload</h2>
            <br>
            <h3>Select Category</h3>
			<?
				$sql = "SELECT  name FROM subject";
				$rs = ery($sql);
			?>
            <select name="dropDown">
                <option value="-1">Please select...</option>
				<? while ($obj = ) { ?>
                    <option value="<?= $obj->id; ?>" <? if ($data['downDown'] == $obj->id) echo "SELECTED"; ?>>
						<?= $obj->description; ?>
                    </option>
				<? } ?>
            </select>


            <!--select id="sub_cat" name="sub_cat">
                <option value="dbms">DBMS</option>
                <option value="os">Operating System</option>
                <option value="cn">Computer Networks</option>
                <option value="html_css">HTML/CSS</option>
            </select-->
            <br>
            <br>            <h4>Enter questions with 4 options.. </h4>
        </div>
        <ul>

            <li id="li_1">
                <label class="description" for="element_1">Question </label>
                <div>
                    <textarea id="element_1" name="question" class="element textarea small"></textarea>
                </div>
            </li>
            <li id="li_2">
                <label class="description" for="element_2">Option A </label>
                <div>
                    <input id="element_2" name="option_a" class="element text medium" type="text" maxlength="255"
                           value=""/>
                </div>
            </li>
            <li id="li_3">
                <label class="description" for="element_3">Option B </label>
                <div>
                    <input id="element_3" name="option_b" class="element text medium" type="text" maxlength="255"
                           value=""/>
                </div>
            </li>
            <li id="li_4">
                <label class="description" for="element_4">Option C </label>
                <div>
                    <input id="element_4" name="option_c" class="element text medium" type="text" maxlength="255"
                           value=""/>
                </div>
            </li>
            <li id="li_5">
                <label class="description" for="element_5">Option D </label>
                <div>
                    <input id="element_5" name="option_d" class="element text medium" type="text" maxlength="255"
                           value=""/>
                </div>
            </li>
            <li id="li_6">
                <label class="description" for="element_6">Correct option </label>
                <div>
                    <input id="element_6" name="corr_ans" class="element text medium" type="text" maxlength="255"
                           value=""/>
                </div>
            </li>

            <li class="buttons">
                <input type="hidden" name="form_id" value="6060"/>

                <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit"/>
            </li>
        </ul>
    </form>

</div>
<img id="bottom" src="bottom.png" alt="">
</body>
</html>
