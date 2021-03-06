var H5PUpgrades = H5PUpgrades || {};

H5PUpgrades['H5P.Summary'] = (function ($) {
  return {
    1: {
      1: {
        contentUpgrade: function (parameters, finished) {
          // Wrap summaries to allow tip.
          if (parameters.summaries !== undefined) {
            for (var i = 0; i < parameters.summaries.length; i++) {
              parameters.summaries[i] = {
                summary: parameters.summaries[i]
              };
            }
          }

          finished(null, parameters);
        }
      },
      6: function (parameters, finished) {
        if (parameters.summaries !== undefined) {
          for (var i = 0; i < parameters.summaries.length; i++) {
            if (parameters.summaries[i].subContentId === undefined) {
              // NOTE: We avoid using H5P.createUUID since this is an upgrade script and H5P function may change in the
              // future
              parameters.summaries[i].subContentId = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (char) {
                var random = Math.random() * 16 | 0, newChar = char === 'x' ? random : (random & 0x3 | 0x8);
                return newChar.toString(16);
              });
            }
          }
        }

        finished(null, parameters);
      }
    }
  };
})(H5P.jQuery);
