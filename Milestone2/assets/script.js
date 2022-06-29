new Vue ({
    el: '#app',
    data: {
        disks: [],
    },
    created(){
        axios.get('https://localhost/29-06/php-ajax-dischi/milestone2/api.php')
            .then(response => this.disks = response.data);
    }
})

// window.location.href+'/api.php'