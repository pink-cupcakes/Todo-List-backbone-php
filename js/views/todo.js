var Todo = Backbone.View.extend({
  
  events: {
    'click a': function(){
      this.model.destroy({
        url : "delete/" + this.model.get('id'),
        success : _.bind(function(model, response) {
          console.log('success');
          console.log(model);
        }, this),
        error : _.bind(function(model, response) {
          console.log('failed');
          console.log(model);
        }, this)
      });;
    },
    'click input': function(){
      this.model.set('status', this.model.get('status') == 0 ? 1 : 0);
      Backbone.sync('update', this.model);
    }
  },
  
  render: function() {
    this.$el.html(this.template(this.model.attributes));
    return this;
  },

  template: templateURL('../js/templates/todo.html')
})