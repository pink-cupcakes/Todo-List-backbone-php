var Todo = Backbone.View.extend({
  tagName: 'li',
  
  events: {
    'click a': function(){
      tasks.remove(this.model)
    },
    'click input': function(){
      this.model.set('done', this.model.get('status') == 0 ? 1 : 0)
      Backbone.sync("update", this.model)
    }
  },

  // handleComplete: function() {
  //   this.model.set(‘done’, this.model.get(‘done’) == 0 ? 1 : 0)
  //   Backbone.sync(“update”, this.model)
  // },

  // handleDelete: function() {
  //   tasks.remove(this.model)    
  // },
  
  render: function() {
    this.$el.html(this.template(this.model.attributes));
    return this;
  },

  template: templateURL('../js/templates/todo.html')
})