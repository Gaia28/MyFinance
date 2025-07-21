document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById('meuGrafico').getContext('2d');

    const dados = {
        labels: ["Janeiro", "Fevereiro", "Março", "Abril"],
        datasets: [{
            label: "Vendas",
            data: [120, 190, 30, 50],
            backgroundColor: [
                'rgba(75, 192, 192, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(255, 99, 132, 0.5)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    };

    const config = {
        type: 'pie',
        data: dados,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    new Chart(ctx, config);
});
