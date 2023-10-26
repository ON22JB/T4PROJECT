new Vue({
    el: '#app',
    data: {
        loggedIn: false,
        username: '',
        password: ''
    },
    created() {
        const isLoggedIn = localStorage.getItem('loggedIn');
        if (isLoggedIn === 'true') {
            this.loggedIn = true;
        }
    },
    methods: {
        login() {if (this.username === 'user' && this.password === 'secretpassword') {
                this.loggedIn = true;
                localStorage.setItem('loggedIn', 'true');
            }
        },
        logout() {
            this.loggedIn = false;
            localStorage.setItem('loggedIn', 'false');
        }
    }
});