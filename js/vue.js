const app = new Vue({

  el: '#app',

  data: {
   dischi : [],
   apiURL : 'http://localhost/php-ajax-dischi/server.php'
 },

 mounted(){ 
  this.getApi();
  console.log(this.dischi);
},


 methods:{

  getApi(){
    axios.get(this.apiURL)
    .then( r => {
      this.dischi = r.data;
    })
    .catch( e => {
      console.log(e);
    })
  },


 }


})