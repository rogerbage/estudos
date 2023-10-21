<?php
	function calc_fibonacci($limit){
		$a = 0;
		$b = 1;
		$t = 0;
		$start_time = hrtime(true);
		for ($i = 0; $i < $limit; $i++){
			$t = $a;
			$a = $b;
			$b = $b + $t;
		}
		$end = hrtime(true);
		$eta = $end - $start_time;
		$eta /= 1e+6;
		error_log("Time: " . $eta);
		return($b);
	}
	$fib = calc_fibonacci(1000);
	error_log("Total Fib: " . $fib);