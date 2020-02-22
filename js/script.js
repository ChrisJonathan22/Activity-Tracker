let fitnessTime = Number(document.querySelector('#Fitness').innerHTML);
let leisureTime = Number(document.querySelector('#Leisure').innerHTML);
let workTime = Number(document.querySelector('#Work').innerHTML);
let eatingTime = Number(document.querySelector('#Eating').innerHTML);
let readingTime = Number(document.querySelector('#Reading').innerHTML);
let sleepingTime = Number(document.querySelector('#Sleeping').innerHTML);

function roundNumber(num) {

    if (Number.isInteger(num)) {
        return num;
    } else {
        
    }
}

console.log(roundNumber(eatingTime));

let ctx = document.getElementById('myChart').getContext('2d');
let myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Fitness', 'Leisure', 'Work', 'Eating', 'Reading', 'Sleeping'],
        datasets: [{
            label: '# of Votes',
            data: [fitnessTime, leisureTime, workTime, eatingTime, readingTime, sleepingTime],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});