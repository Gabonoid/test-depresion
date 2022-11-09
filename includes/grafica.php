<?php
function graficar(
    $back,
    $front,
    $analisis,
    $mantenimiento,
    $movil,
    $tesis,
    $seguridad,
    $server
) {
    echo '<script>
    const ctx = document.getElementById("myChart");

const myChart = new Chart(ctx, {
	type: "pie",
	data: {
		labels: ["Backend", "Frontend", "Analisis de Datos", "Mantenimiento", "Desarrollo Movil","Tesis", "Ciberseguridad", "Servidores"],
		datasets: [
			{
				label: "Puntuación",
				data: ['.$back.', '.$front.', '.$analisis.', '.$mantenimiento.', '.$movil.', '.$tesis.', '.$seguridad.', '.$server.'],
				backgroundColor: [
					"rgba(255,99,132,0.4)",
					"rgba(54,162,235,0.4)",
					"rgba(255,206,86,0.4)",
					"rgba(75,192,192,0.4)",
					"rgba(180,99,132,0.4)",
					"rgba(54,16,235,0.4)",
					"rgba(255,206,200,0.4)",
					"rgba(20,12,80,0.4)",
				],
				borderColor: [
					"rgba(255,99,132,1)",
					"rgba(54,162,235,1)",
					"rgba(255,206,86,1)",
					"rgba(75,192,192,1)",
					"rgba(180,99,132,1)",
					"rgba(54,16,235,1)",
					"rgba(255,206,200,1)",
					"rgba(20,12,80,1)",
				],
				borderWidth: 1.5,
			},
		],
	},
});
    </script>';
}
