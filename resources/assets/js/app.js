window.Echo = new Echo({
   broadcaster: 'redis'
});

Echo.channel('domination')
    .listen('update', function (e) {
        document.getElementById('time-a').style.width = e.timeA;
        document.getElementById('time-b').style.width = e.timeB;
    });

