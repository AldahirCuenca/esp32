<?
require __DIR__ . '/../../src/models/sensores.php';
function funcionsensores($request){
    $objSensor= new Sensores();
    return $objSensor->insertarSensor($request);
}
function funciongetSensoreData($request){
    $objSensor= new Sensores();
    return $objSensor->getSensorData($request);
}
/*function funcionEliminarSensor(){
    $objSensor= new Sensores($request);
    return $objSensor->eliminarSensor($request);
}*/

