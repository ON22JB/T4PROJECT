<?php
$outputresult = "Choose a Conversion Option";
            if (isset($_POST['convert'])) {
              $amount=$_POST['amount'];
              $option1=$_POST['Unit1'];
              $option2=$_POST['Unit2'];
              #SAME UNITS
              if ($option1==$option2) {
                $outputresult = "Please choose two different units to convert.";
                $result = null;
            }
            #PX and PT
            if ($option1=='px' && $option2=='pt') {
                  $result=$amount*0.75;
            }
            if ($option1=='pt' && $option2=='px') {
                $result=$amount*1.333;
            }
            #PX and EM
            if ($option1=='px' && $option2=='em') {
                $base=$_POST['base'];
                $result=$amount/$base;
            }
            if ($option1=='em' && $option2=='px') {
                $base=$_POST['base'];
              $result=$amount*$base;
            }
            #PX and IN
            if ($option1=='px' && $option2=='in') {
                $dpi=$_POST['dpi'];
                $result=$amount/$dpi;
            }
            if ($option1=='in' && $option2=='px') {
                $dpi=$_POST['dpi'];
              $result=$amount*$dpi;
            }
            #PX and CM
            if ($option1=='px' && $option2=='cm') {
                $dpi=$_POST['dpi'];
              $result=$amount*2.54/$dpi;
            }
            if ($option1=='cm' && $option2=='px') {
                $dpi=$_POST['dpi'];
              $result=$amount/2.54*$dpi;
            }
            #PX and MM
            if ($option1=='px' && $option2=='mm') {
                $dpi=$_POST['dpi'];
              $result=$amount*25.4/$dpi;
            }
            if ($option1=='mm' && $option2=='px') {
                $dpi=$_POST['dpi'];
              $result=$amount/25.4*$dpi;
            }
            #PT and EM
            if ($option1=='pt' && $option2=='em') {
                $result=$amount*0.0836;
            }
            if ($option1=='em' && $option2=='pt') {
              $result=$amount/0.0836;
            }
            #PT and IN
            if ($option1=='pt' && $option2=='in') {
                $result=$amount*0.013888800555552;
            }
            if ($option1=='in' && $option2=='pt') {
              $result=$amount/0.013888800555552;
            }
            #PT and CM
            if ($option1=='pt' && $option2=='cm') {
                $result=$amount/28.3464566929;
            }
            if ($option1=='cm' && $option2=='pt') {
              $result=$amount*28.3464566929;
            }
            #PT and MM
            if ($option1=='pt' && $option2=='mm') {
                $result=$amount/2.8346456693;
            }
            if ($option1=='mm' && $option2=='pt') {
              $result=$amount*2.8346456693;
            }
            #EM an IN
            if ($option1=='em' && $option2=='in') {
                $result=$amount/6.022500060225;
            }
            if ($option1=='in' && $option2=='em') {
              $result=$amount*6.022500060225;
            }
            #EM an CM
            if ($option1=='em' && $option2=='cm') {
                $result=$amount/2.3710630158366;
            }
            if ($option1=='cm' && $option2=='em') {
              $result=$amount*2.3710630158366;
            }
            #EM an MM
            if ($option1=='em' && $option2=='mm') {
                $result=$amount/0.23710630158366;
            }
            if ($option1=='mm' && $option2=='em') {
              $result=$amount*0.23710630158366;
            }
            #IN an CM
            if ($option1=='cm' && $option2=='in') {
              $result=$amount/2.54;
            }
            if ($option1=='in' && $option2=='cm') {
              $result=$amount*2.54;
            }
            #IN an MM
            if ($option1=='mm' && $option2=='in') {
              $result=$amount/25.4;
            }
            if ($option1=='in' && $option2=='mm') {
              $result=$amount*25.4;
            }
            #CM an MM
            if ($option1=='mm' && $option2=='cm') {
              $result=$amount/10;
            }
            if ($option1=='cm' && $option2=='mm') {
              $result=$amount*10;
            }
            
            if ($result !== null) {
                $outputresult = '';
                $outputresult = $amount . " " . $option1 . " " . "=" . " " . $result . " " . $option2;
              } 

            }else {
                $outputresult = "Choose a Conversion Option";
            }

           ?>  