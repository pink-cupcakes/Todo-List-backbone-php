var AppView = Backbone.View.extend({

  el: '#app',

  initialize: function() {
  },
  
  render: function() {
    this.$el.html(this.template());

    new TodoList({
      // collection: this.chores,
      el: this.$('.list')
    }).render();
  },

  template: templateURL('../js/templates/app.html')

});