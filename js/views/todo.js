var Todo = Backbone.View.extend({

  // events: {
  //   'click .completed': 'handleClick'
  // },

  // handleClick: function() {
  //   this.model.select();
  // },
  
  render: function() {
    this.$el.html(this.template());
    return this;
  },

  template: templateURL('../js/templates/todo.html')
})