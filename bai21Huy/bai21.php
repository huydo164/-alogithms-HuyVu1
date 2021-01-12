<?php
//Đệ quy
function calSalary($salary, $n){
   if($n == 0){
       return $salary;
    }
    else{
        return (calSalary($salary, $n -1) + calSalary($salary, ($n - 1)) * 0.1);
    }
}


//Không đệ quy
function tienluong($salary, $n){
    
    for($i = 1; $i <= $n; $i++){
        $salary += $salary * 0.1;
    }
    return $salary;
}

print (tienluong(100, 3));
echo '<br>';
print (calSalary(100, 3));