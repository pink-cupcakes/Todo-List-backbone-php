var AppView = Backbone.View.extend({

  el: '#app',

  initialize: function() {
    this.tasks = new Tasks();
    this.listenTo(this.tasks, 'sync');
    this.tasks.search();
    this.render();
  },
  
  render: function() {
    this.$el.html(this.template());

    new TodoList({
      collection: this.tasks,
      el: this.$('.list')
    }).render();
  },

  template: templateURL('../js/templates/app.html')

});