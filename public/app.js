new Vue({
  el: '#root',

  data() {

    return {skills: [] };
  },

  created() {
      // axios.get('/skills').then(response => console.log(response.data));
      axios.get('/skills').then(response => this.skills = response.data);
  }

});
