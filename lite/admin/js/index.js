(function() {
  var AdminPanelViewModel;

  AdminPanelViewModel = class AdminPanelViewModel {
    constructor() {
      this.changeTab = this.changeTab.bind(this);
      this.collapse = this.collapse.bind(this);
      this.displayTab = ko.observable('users');
      this.collapsedNav = ko.observable(false);
    }

    changeTab(tab) {
      return this.displayTab(tab);
    }

    collapse() {
      return this.collapsedNav(!this.collapsedNav());
    }

  };

  $(function() {
    return ko.applyBindings(new AdminPanelViewModel());
  });

}).call(this);

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQSxNQUFBOztFQUFNLHNCQUFOLE1BQUEsb0JBQUE7SUFDRSxXQUFhLENBQUEsQ0FBQTtVQUdiLENBQUEsZ0JBQUEsQ0FBQTtVQUVBLENBQUEsZUFBQSxDQUFBO01BSkUsSUFBQyxDQUFBLFVBQUQsR0FBYyxFQUFFLENBQUMsVUFBSCxDQUFjLE9BQWQ7TUFDZCxJQUFDLENBQUEsWUFBRCxHQUFnQixFQUFFLENBQUMsVUFBSCxDQUFjLEtBQWQ7SUFGTDs7SUFHYixTQUFXLENBQUMsR0FBRCxDQUFBO2FBQ1QsSUFBQyxDQUFBLFVBQUQsQ0FBWSxHQUFaO0lBRFM7O0lBRVgsUUFBVSxDQUFBLENBQUE7YUFDUixJQUFDLENBQUEsWUFBRCxDQUFjLENBQUMsSUFBQyxDQUFBLFlBQUQsQ0FBQSxDQUFmO0lBRFE7O0VBTlo7O0VBU0EsQ0FBQSxDQUFFLFFBQUEsQ0FBQSxDQUFBO1dBQ0EsRUFBRSxDQUFDLGFBQUgsQ0FBaUIsSUFBSSxtQkFBSixDQUFBLENBQWpCO0VBREEsQ0FBRjtBQVRBIiwic291cmNlc0NvbnRlbnQiOlsiY2xhc3MgQWRtaW5QYW5lbFZpZXdNb2RlbFxuICBjb25zdHJ1Y3RvcjogKCkgLT5cbiAgICBAZGlzcGxheVRhYiA9IGtvLm9ic2VydmFibGUoJ3VzZXJzJylcbiAgICBAY29sbGFwc2VkTmF2ID0ga28ub2JzZXJ2YWJsZShmYWxzZSlcbiAgY2hhbmdlVGFiOiAodGFiKSA9PlxuICAgIEBkaXNwbGF5VGFiKHRhYilcbiAgY29sbGFwc2U6ICgpID0+XG4gICAgQGNvbGxhcHNlZE5hdighQGNvbGxhcHNlZE5hdigpKVxuICAgIFxuJCAtPlxuICBrby5hcHBseUJpbmRpbmdzKG5ldyBBZG1pblBhbmVsVmlld01vZGVsKCkpIl19
//# sourceURL=coffeescript