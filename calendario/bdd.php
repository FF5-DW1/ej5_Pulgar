<?php
$servidor = "mysql";  // Cambia esto si tu base de datos se encuentra en un servidor diferente
$usuario = "pulgar";  // Nombre de usuario de la base de datos
$contrasena = "pulgarsin";  // Contraseña de la base de datos
$base_datos = "calendar";  // Nombre de la base de datos

// Establecer la conexión
try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $contrasena);
    // Configurar el manejo de errores para que lance excepciones en caso de fallos
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}

// Obtener el año y el mes actual
// $year = date('Y');
// $month = date('m');

// // Generar el calendario
// $calendar = '<table>';

// // Encabezado del calendario
// $calendar .= '<thead>';
// $calendar .= '<tr>';
// $calendar .= '<th>Domingo</th>';
// $calendar .= '<th>Lunes</th>';
// $calendar .= '<th>Martes</th>';
// $calendar .= '<th>Miércoles</th>';
// $calendar .= '<th>Jueves</th>';
// $calendar .= '<th>Viernes</th>';
// $calendar .= '<th>Sábado</th>';
// $calendar .= '</tr>';
// $calendar .= '</thead>';

// // Cuerpo del calendario
// $calendar .= '<tbody>';

// // Obtener el primer día del mes
// $firstDay = mktime(0, 0, 0, $month, 1, $year);

// // Obtener el número de días en el mes
// $daysInMonth = date('t', $firstDay);

// // Obtener el día de la semana del primer día del mes
// $dayOfWeek = date('w', $firstDay);

// // Rellenar los días vacíos del comienzo del mes
// $calendar .= '<tr>';
// for ($i = 0; $i < $dayOfWeek; $i++) {
//     $calendar .= '<td></td>';
// }

// // Recorrer los días del mes
// $currentDay = 1;
// while ($currentDay <= $daysInMonth) {
//     // Si es domingo, comenzar una nueva fila
//     if ($dayOfWeek == 7) {
//         $dayOfWeek = 0;
//         $calendar .= '</tr><tr>';
//     }

//     // Formatear la fecha actual
//     $date = date('Y-m-d', mktime(0, 0, 0, $month, $currentDay, $year));

//     // Consultar los eventos para la fecha actual
//     $query = "SELECT titulo FROM eventos WHERE fecha_inicio <= '$date' AND fecha_fin >= '$date'";
//     $result = mysqli_query($conexion, $query);

//     // Construir la celda del calendario con los eventos
//     $calendar .= '<td>';
//     $calendar .= '<div class="day">' . $currentDay . '</div>';
//     while ($row = mysqli_fetch_assoc($result)) {
//         $calendar .= '<div class="event">' . $row['titulo'] . '</div>';
//     }
//     $calendar .= '</td>';

//     // Incrementar el día actual y el día de la semana
//     $currentDay++;
//     $dayOfWeek++;
// }

// // Rellenar los días vacíos del final del mes
// if ($dayOfWeek != 7) {
//     $remainingDays = 7 - $dayOfWeek;
//     for ($i = 0; $i < $remainingDays; $i++) {
//         $calendar .= '<td></td>';
//     }
// }

// $calendar .= '</tr>';
// $calendar .= '</tbody>';

// $calendar .= '</table>';

// // Mostrar el calendario
// echo $calendar;

// // Cerrar la conexión
// mysqli_close($conexion);
 ?>

