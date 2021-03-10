require('./bootstrap');

import Vue from 'vue'
Vue.component('student-form', require('./components/students/Add').default)
Vue.component('backup-student-form', require('./components/students/BackupAdd').default)


const app = new Vue({
    el: '#app',
});

