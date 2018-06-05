var TodoList = Backbone.View.extend({
  tagName: 'ul',

  initialize: function() {
    this.listenTo(this.collection, 'sync', this.render);
  },

  remove: function(task){
    Backbone.sync("delete", task);
  },
  
  render: function() {
    this.$el.children().detach();
    this.$el.html(this.template());

    this.$('.chore-list').append(
      this.collection.map(function(task) {
        return new Todo({model: task}).render().el;
      })
    );
    return this;
  },

  template: templateURL('../js/templates/todoList.html')
});