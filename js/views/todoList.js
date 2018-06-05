var TodoList = Backbone.View.extend({
  tagName: 'ul',

  initialize: function() {
    this.collection.on('add remove', this.render, this)
    this.collection.on('remove', this.remove, this);
  },

  remove: function(task){
    Backbone.sync('delete', task)
  },

  render: function() {
    this.$el.children().detach();
    this.$el.html(this.template());

    this.$('.chore-list').append(
      this.collection.map(function(task, index, collection) {
        return new Todo({model: task, collection: collection}).render().el;
      })
    );
    return this;
  },

  template: templateURL('../js/templates/todoList.html')
});