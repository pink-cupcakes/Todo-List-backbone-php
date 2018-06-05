const Chore = Backbone.Model.extend({
  defaults: {
    task: '',
    date: '',
    completed: false
  }
});

const ChoreList = Backbone.Collection.extend({

});

let task1 = new Chore({
  task: 'Sweep floor',
  date: new Date().toLocaleDateString("en-US"),
  completed: false
});

let task2 = new Chore({
  task: 'Laundry',
  date: new Date().toLocaleDateString("en-US"),
  completed: false
});

let testChores = new ChoreList([task1, task2]);