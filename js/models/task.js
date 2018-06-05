var Task = Backbone.Model.extend({ 
  url: function (){
    return this.id ? 'tasks.php?id=' + this.id : 'tasks.php';
  },
  defaults: { done: 0 }
});