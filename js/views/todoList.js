var TodoList = Backbone.View.extend({

  initialize: function() {
    // this.listenTo(this.collection, 'sync', this.render);
  },
  
  render: function() {
    let test = [1, 2];
    this.$el.children().detach();
    this.$el.html(this.template());

    this.$('.chore-list').append(
      test.map(function() {
        return new Todo({}).render().el;
      })
    );
    return this;
  },

  template: templateURL('../js/templates/todoList.html')
});