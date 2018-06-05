var Task = Backbone.Model.extend({ 
  urlRoot: '/tasks',
  defaults: { status: 0 }
});