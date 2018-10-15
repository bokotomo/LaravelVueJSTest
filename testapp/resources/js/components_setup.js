
Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('example-component2', require('./components/ExampleComponent2.vue'));


Vue.component('example', require('./components/Example.vue'));
        
Vue.component('todo-item', {
  props: ['todo'],
  template: '<li>!!!!@{{ todo.text }}</li>'
})