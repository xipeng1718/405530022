<?php   
       $data=array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)   
       );
        echo "<table border=1>";
        for ($i=0; $i<count($data); $i++) { 
            
           for ($j=0; $j<count($data[$i]); $j++){
                
            echo "<td>";
            echo $data[$i][$j];

            }  echo "<tr>";
        } 

        echo "<table border=1>";
        foreach ($data as $key ) {
            echo "<tr>";
            foreach ($key as $value){
            echo "<td>";
            echo "$value";
             
            }
        }
        echo "</tr>";
        echo "<br>";
        
        function car($car){
            $i = join("",array_map("digit",$car));
            return "<tr>$i</tr>";
        }
        function digit($digit){
            return "<td>$digit</td>";
        }
        $table =join("",array_map("car",$data));
            echo $table;

        
            
?> 