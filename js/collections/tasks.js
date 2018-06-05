var Tasks = Backbone.Collection.extend({
  model: Task,
  url: 'http://localhost:8888/KYC/chores/tasks',

  search: function(query) {
    this.fetch({
      data: {
        username: query,
      }
    })
  }
});