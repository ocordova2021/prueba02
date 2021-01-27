

$( document ).ready(function() {
    
});


function activar_Arm(id){
                if(id==1){
                    $("#uno").addClass('uno');
                    $("#dos").addClass('dos');
                    
                }else if(id==2){
                    $("#dos").addClass('dos');
                    $(".uno").removeAttr('class');

                }else{
                    $(".uno").removeAttr('class');
                    $(".dos").removeAttr('class');
                }
           
}


function calcular_population(){
    
    var opcion1=document.getElementById('opc1').checked;
    var opcion2=document.getElementById('opc2').checked;
    var opcion3=document.getElementById('opc3').checked;
    var resultado=Math.pow(5,2)
   // alert(resultado);
    if(opcion1==true){

        /*Calculo pooled mean */
        var Meanarm1=document.getElementById('MeanArm1').value;
        var Narm1=document.getElementById('NArm1').value;
        var subvalor1=(Meanarm1*Narm1).toFixed(2);
       
        var Meanarm2=document.getElementById('MeanArm2').value;
        var Narm2=document.getElementById('NArm2').value;
        var subvalor2=(Meanarm2*Narm2).toFixed(2);
       
        
        var subvalor3=parseFloat(Narm1)+parseFloat(Narm2);
        var totalMean= ((parseFloat(subvalor1) + parseFloat(subvalor2))/subvalor3).toFixed(2);
     
        /*Calculo pooled Sd */

          var SdArm1=document.getElementById('SdArm1').value;
          var SdArm2=document.getElementById('SdArm2').value;

        var subValor1SD1=(Narm1-1); //sample size of group 
        var subValor2SD1=(Math.pow(SdArm1,2)).toFixed(2); //Standard deviation of group 1 
       
        var subValorTotal= (subValor1SD1 * subValor2SD1).toFixed(2);
      
        var subValor1SD2=(Narm2-1); //sample size of group 
        var subValor2SD2=(Math.pow(SdArm2,2)).toFixed(1); //Standard deviation of group 2
        var subValorTotalSD2= (subValor1SD2 * subValor2SD2).toFixed(2);
       
        
        //Sumo para tener el numerador listo
        var numerador=(parseFloat(subValorTotal)+parseFloat(subValorTotalSD2)).toFixed(2);
        var denomimador=((parseFloat(Narm1)+parseFloat(Narm2))-2).toFixed(2);
   
        subtotal_SDpooled=(numerador/denomimador).toFixed(2);
        //alert(totalSDpooled);
        total_SdPooled= Math.sqrt((subtotal_SDpooled)).toFixed(2);

        document.getElementById('Total_Mean').innerHTML=totalMean;
        document.getElementById('Total_Sd').innerHTML=total_SdPooled;
      

    }else if(opcion2==true){


        var Meanarm1=document.getElementById('MeanArm1').value;
        var Narm1=document.getElementById('NArm1').value;
        var subvalor1=(Meanarm1*Narm1).toFixed(2);
       
        var Meanarm2=document.getElementById('MeanArm2').value;
        var Narm2=document.getElementById('NArm2').value;
        var subvalor2=(Meanarm2*Narm2).toFixed(2);

        var Meanarm3=document.getElementById('MeanArm3').value;
        var Narm3=document.getElementById('NArm3').value;
        var subvalor_3=(Meanarm3*Narm3).toFixed(2);

        var subvalor3=(parseFloat(Narm1)+parseFloat(Narm2)+parseFloat(Narm3)).toFixed(2);
        var totalMean= ((parseFloat(subvalor1) + parseFloat(subvalor2)+parseFloat(subvalor_3))/subvalor3).toFixed(2);
       
       
          /*Calculo pooled Sd */

          var SdArm1=document.getElementById('SdArm1').value;
          var SdArm2=document.getElementById('SdArm2').value;
          var SdArm3=document.getElementById('SdArm3').value;

        var subValor1SD1=(Narm1-1); //sample size of group 
        var subValor2SD1=(Math.pow(SdArm1,2)).toFixed(2); //Standard deviation of group 1 
        var subValorTotal= (subValor1SD1 * subValor2SD1).toFixed(2);

        var subValor1SD2=(Narm2-1); //sample size of group 
        var subValor2SD2=(Math.pow(SdArm2,2)).toFixed(1); //Standard deviation of group 2
        var subValorTotalSD2= (subValor1SD2 * subValor2SD2).toFixed(2);

        var subValor1SD3=(Narm3-1); //sample size of group 
        var subValor2SD3=(Math.pow(SdArm3,2)).toFixed(1); //Standard deviation of group 2
        var subValorTotalSD3= (subValor1SD3 * subValor2SD3).toFixed(2);

        //Sumo para tener el numerador listo
        var numerador=(parseFloat(subValorTotal)+parseFloat(subValorTotalSD2)+parseFloat(subValorTotalSD3)).toFixed(2);
        var denomimador=((parseFloat(Narm1)+parseFloat(Narm2)+parseFloat(Narm3))-3).toFixed(2);
       
        var subtotal_SDpooled=(numerador/denomimador).toFixed(2);
        var total_SdPooled= Math.sqrt((subtotal_SDpooled)).toFixed(2);
        document.getElementById('Total_Mean').innerHTML=totalMean;
        document.getElementById('Total_Sd').innerHTML=total_SdPooled;

    }else if(opcion3==true){

        var Meanarm1=document.getElementById('MeanArm1').value;
        var Narm1=document.getElementById('NArm1').value;
        var subvalor1=(Meanarm1*Narm1).toFixed(2);
       
        var Meanarm2=document.getElementById('MeanArm2').value;
        var Narm2=document.getElementById('NArm2').value;
        var subvalor2=(Meanarm2*Narm2).toFixed(2);

        var Meanarm3=document.getElementById('MeanArm3').value;
        var Narm3=document.getElementById('NArm3').value;
        var subvalor_3=(Meanarm3*Narm3).toFixed(2);

        var Meanarm4=document.getElementById('MeanArm4').value;
        var Narm4=document.getElementById('NArm4').value;
        var subvalor_4=(Meanarm4*Narm4).toFixed(2);

        var subvalor4=(parseFloat(Narm1)+parseFloat(Narm2)+parseFloat(Narm3)+parseFloat(Narm4)).toFixed(2);
        var totalMean= ((parseFloat(subvalor1) + parseFloat(subvalor2)+parseFloat(subvalor_3)+parseFloat(subvalor_4))/subvalor4).toFixed(2);

         /*Calculo pooled Sd */

         var SdArm1=document.getElementById('SdArm1').value;
         var SdArm2=document.getElementById('SdArm2').value;
         var SdArm3=document.getElementById('SdArm3').value;
         var SdArm4=document.getElementById('SdArm4').value;

       var subValor1SD1=(Narm1-1); //sample size of group 
       var subValor2SD1=(Math.pow(SdArm1,2)).toFixed(2); //Standard deviation of group 1 
       var subValorTotal= (subValor1SD1 * subValor2SD1).toFixed(2);

       var subValor1SD2=(Narm2-1); //sample size of group 
       var subValor2SD2=(Math.pow(SdArm2,2)).toFixed(1); //Standard deviation of group 2
       var subValorTotalSD2= (subValor1SD2 * subValor2SD2).toFixed(2);

       var subValor1SD3=(Narm3-1); //sample size of group 
       var subValor2SD3=(Math.pow(SdArm3,2)).toFixed(1); //Standard deviation of group 2
       var subValorTotalSD3= (subValor1SD3 * subValor2SD3).toFixed(2);

       var subValor1SD4=(Narm4-1); //sample size of group 
       var subValor2SD4=(Math.pow(SdArm4,2)).toFixed(1); //Standard deviation of group 2
       var subValorTotalSD4= (subValor1SD4 * subValor2SD4).toFixed(2);

       //Sumo para tener el numerador listo
       var numerador=(parseFloat(subValorTotal)+parseFloat(subValorTotalSD2)+parseFloat(subValorTotalSD3)+parseFloat(subValorTotalSD4)).toFixed(2);
       var denomimador=((parseFloat(Narm1)+parseFloat(Narm2)+parseFloat(Narm3)+parseFloat(Narm4))-4).toFixed(2);
      
       var subtotal_SDpooled=(numerador/denomimador).toFixed(2);
       var total_SdPooled= Math.sqrt((subtotal_SDpooled)).toFixed(2);
       document.getElementById('Total_Mean').innerHTML=totalMean;
       document.getElementById('Total_Sd').innerHTML=total_SdPooled;

    }
}


function calcular_sd_e(){

    var N_Gorud=document.getElementById("n_groud").value;
    var N_SE=document.getElementById("n_SE").value;

    var subtotal=Math.sqrt((N_Gorud)).toFixed(2);
    var total_SD_E= (N_SE * subtotal).toFixed(2);
    document.getElementById('SD_SD_E').innerHTML=total_SD_E;



}

function calcular_bmi_1(){

    var N_Gorud=document.getElementById("Mean1_1").value;
    var N_SE=document.getElementById("SD_1").value;
    var total_1=(N_Gorud-(2*N_SE)).toFixed(2);

    document.getElementById('BMI_TOTAL_1').innerHTML=total_1 + " kg/m2";

    if(total_1>=25){
        $("#agragar_clase1").addClass('alert alert-success');
    }else{
        $("#agragar_clase1").addClass('alert alert-danger');
    }   
      
var N_Gorud2=document.getElementById("Mean1_2").value;
var N_SE2=document.getElementById("SD_2").value;

var total_2=(N_Gorud2-(2*N_SE2)).toFixed(2);
document.getElementById('BMI_TOTAL_2').innerHTML=total_2 + " kg/m2";

if(total_2>=25){
    $("#agragar_clase2").addClass('alert alert-success');
}else{
    $("#agragar_clase2").addClass('alert alert-danger');
}  

 

}


function calcular_bmi_2(){

    var N_Gorud_2_1=document.getElementById("Mean2_1").value;
    var N_SE_2_1=document.getElementById("SD_2_1").value;
    var total_2_1=(N_Gorud_2_1-(2*N_SE_2_1)).toFixed(2);

    document.getElementById('BMI_TOTAL_2_1').innerHTML=total_2_1 + " kg/m2";

    if(total_2_1>=23){
        $("#agragar_clase2_1").addClass('alert alert-success');
    }else{
        $("#agragar_clase2_1").addClass('alert alert-danger');
    }   
      

    var N_Gorud2_2=document.getElementById("Mean2_2").value;
    var N_SE2_2=document.getElementById("SD_2_2").value;

    var total_2_2=(N_Gorud2_2-(2*N_SE2_2)).toFixed(2);
    document.getElementById('BMI_TOTAL_2_2').innerHTML=total_2_2 + " kg/m2";

    if(total_2_2>=23){
        $("#agragar_clase2_2").addClass('alert alert-success');
    }else{
        $("#agragar_clase2_2").addClass('alert alert-danger');
    } 
    
}


    function calcular_prepost(){

        var Mean_diff=document.getElementById('Mean_diff').value;
        var P_value=document.getElementById('P_value').value;
        var Total_N= document.getElementById('Total_N').value;

        var subtotalNumerador= (Mean_diff/(Mean_diff-(Total_N-1))).toFixed(2);
        var subtotaldenominador = (1/Total_N);

        var totaldenominador= Math.sqrt(subtotaldenominador);

        var total= (subtotalNumerador/totaldenominador).toFixed(2);

        document.getElementById('Total_sd').innerHTML=total;

        // valor abs de valor 1 / valor 2

        //valor dos es igual (raiz 1/totalN)

    }

    function calcular_between1(){

        var Estime_e=document.getElementById('Estime_e').value;
        var P_value=document.getElementById('P_value').value;
        var subtotal2= (0.743-2.404*(Math.log(P_value))).toFixed(4); 
        var subtotal3 = Math.sqrt(subtotal2);
        var subtotal4= -0.862 + subtotal3;
        var subtotal5=Estime_e/subtotal4;
        var total= (Math.abs(subtotal5)).toFixed(11); 

         document.getElementById("Total_sd").innerHTML=total;
    }

    function calcular_between2(){

        var Lower=document.getElementById('Lower').value;
        var upper=document.getElementById('upper').value;
       
        var subtotal1= (upper-Lower)/3.92;
        var total =(Math.abs(subtotal1)).toFixed(11);

         document.getElementById("Total_sd2").innerHTML=total;
    }


    function calcular_between3(){

        var Estime_e=document.getElementById('Estime_e_2').value;
        var P_value=document.getElementById('P_value_2').value;
        
        var subtotal1=Math.log(Estime_e);
        var subtotal2= (0.743-2.404*(Math.log(P_value))).toFixed(4); 
        var subtotal3 = Math.sqrt(subtotal2);
        var subtotal4= -0.862 + subtotal3;
        var total=(subtotal1/subtotal4).toFixed(11);
      
         document.getElementById("Total_sd_3").innerHTML=total;
    }


    function calcular_between4(){

        var Lower=document.getElementById('Lower_2').value;
        var upper=document.getElementById('upper_2').value;
       
        var total = ((Math.log(Lower)-Math.log(upper))/3.92).toFixed(11);

         document.getElementById("Total_sd_4").innerHTML=total;
    }


    function calculo_iqrs(){
        var minimum=document.getElementById('minimum').value;
        var median=document.getElementById('median').value;
        var maximum=document.getElementById('maximum').value;
        var sample_size=document.getElementById('sample_size').value;

        var subtotal1= parseFloat(sample_size) + 2

       
        //var subtotal2= parseFloat(median) +parseFloat(maximum);

        var total= ((subtotal1 * (parseFloat(median) +parseFloat(maximum)))/4).toFixed(3);

        document.getElementById("method1").innerHTML=total;



    }

      
 

