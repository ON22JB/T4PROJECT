<?php
            if (isset($_POST['convert'])) {
              $amount=$_POST['amount'];
              $option1=$_POST['Unit1'];
              $option2=$_POST['Unit2'];
              $base=$_POST['base'];
              $dpi=$_POST['dpi'];
              #SAME UNITS
              if ($option1=='px' && $option2=='px' || $option1=='pt' && $option2=='pt' || $option1=='em' && $option2=='em' || $option1=='rem' && $option2=='rem' || $option1=='cm' && $option2=='cm' || $option1=='mm' && $option2=='mm') {
                echo "Please choose two different units to convert.";
            }
            #PX and PT
            if ($option1=='px' && $option2=='pt') {
                  $result=$amount*0.75;
                  echo $amount." px = ".$result." pt";
            }
            if ($option1=='pt' && $option2=='px') {
                $result=$amount*1.333;
                echo $amount." pt = ".$result." px";
            }
            #PX and EM
            if ($option1=='px' && $option2=='em') {
                $result=$amount/$base;
                echo $amount." px = ".$result." em";
            }
            if ($option1=='em' && $option2=='px') {
              $result=$amount*$base;
              echo $amount." em = ".$result." px";
            }
            #PX and IN
            if ($option1=='px' && $option2=='in') {
                $result=$amount/$dpi;
                echo $amount." px = ".$result." in";
            }
            if ($option1=='in' && $option2=='px') {
              $result=$amount*$dpi;
              echo $amount." in = ".$result." px";
            }
            #PX and CM
            if ($option1=='px' && $option2=='cm') {
              $result=$amount*2.54/$dpi;
                echo $amount." px = ".$result." cm";
            }
            if ($option1=='cm' && $option2=='px') {
              $result=$amount/2.54*$dpi;
              echo $amount." cm = ".$result." px";
            }
            #PX and MM
            if ($option1=='px' && $option2=='mm') {
              $result=$amount*25.4/$dpi;
                echo $amount." px = ".$result." mm";
            }
            if ($option1=='mm' && $option2=='px') {
              $result=$amount/25.4*$dpi;
              echo $amount." mm = ".$result." px";
            }
            #PT and EM
            if ($option1=='pt' && $option2=='em') {
                $result=$amount*0.0836;
                echo $amount." pt = ".$result." em";
            }
            if ($option1=='em' && $option2=='pt') {
              $result=$amount/0.0836;
              echo $amount." em = ".$result." pt";
            }
            #PT and IN
            if ($option1=='pt' && $option2=='in') {
                $result=$amount*0.013888800555552;
                echo $amount." pt = ".$result." in";
            }
            if ($option1=='in' && $option2=='pt') {
              $result=$amount/0.013888800555552;
              echo $amount." in = ".$result." pt";
            }
            #PT and CM
            if ($option1=='pt' && $option2=='cm') {
                $result=$amount/28.3464566929;
                echo $amount." pt = ".$result." cm";
            }
            if ($option1=='cm' && $option2=='pt') {
              $result=$amount*28.3464566929;
              echo $amount." cm = ".$result." pt";
            }
            #PT and MM
            if ($option1=='pt' && $option2=='mm') {
                $result=$amount/2.8346456693;
                echo $amount." pt = ".$result." mm";
            }
            if ($option1=='mm' && $option2=='pt') {
              $result=$amount*2.8346456693;
              echo $amount." mm = ".$result." pt";
            }
            #EM an IN
            if ($option1=='em' && $option2=='in') {
                $result=$amount/6.022500060225;
                echo $amount." em = ".$result." in";
            }
            if ($option1=='in' && $option2=='em') {
              $result=$amount*6.022500060225;
              echo $amount." in = ".$result." em";
            }
            #EM an CM
            if ($option1=='em' && $option2=='cm') {
                $result=$amount/2.3710630158366;
                echo $amount." em = ".$result." cm";
            }
            if ($option1=='cm' && $option2=='em') {
              $result=$amount*2.3710630158366;
              echo $amount." cm = ".$result." em";
            }
            #EM an MM
            if ($option1=='em' && $option2=='mm') {
                $result=$amount/0.23710630158366;
                echo $amount." em = ".$result." mm";
            }
            if ($option1=='mm' && $option2=='em') {
              $result=$amount*0.23710630158366;
              echo $amount." mm = ".$result." em";
            }
            #IN an CM
            if ($option1=='cm' && $option2=='in') {
              $result=$amount/2.54;
              echo $amount." cm = ".$result." cm";
            }
            if ($option1=='in' && $option2=='cm') {
              $result=$amount*2.54;
              echo $amount." in = ".$result." cm";
            }
            #IN an MM
            if ($option1=='mm' && $option2=='in') {
              $result=$amount/25.4;
              echo $amount." mm = ".$result." in";
            }
            if ($option1=='in' && $option2=='mm') {
              $result=$amount*25.4;
              echo $amount." in = ".$result." mm";
            }
            #CM an MM
            if ($option1=='mm' && $option2=='cm') {
              $result=$amount/10;
              echo $amount." mm = ".$result." cm";
            }
            if ($option1=='cm' && $option2=='mm') {
              $result=$amount*10;
              echo $amount." cm = ".$result." mm";
            }
              

            }else {
              echo "Choose a Conversion Option";
            }


           ?>  