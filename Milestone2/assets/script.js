new Vue ({
    el: '#app',
    data: {
        disks: [],
    },
    created(){
        axios.get('http://localhost/29-06/php-ajax-dischi/Milestone2/api.php')
            .then(response => this.disks = response.data);
    }
})