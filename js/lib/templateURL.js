(function() {

  let promises = [];

  window.templateURL = function(src) {
    let template;

    let defer = $.Deferred();
    defer.done(data => {
      template = _.template(data);
    });
    promises.push(defer);

    $('<script>').load(src, (data, status) => {
      defer.resolve(data);
    });

    return function() {
      if (!template) {
        console.error(`Template '${src}' failed to load`);
        return;
      }
      return template.apply(this, arguments);
    };
  };

  window.backboneReady = function(callback) {
    $(document).ready(() => $.when(...promises).then(callback));
  };

})();