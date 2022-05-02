Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-multi-date', require('./components/IndexField'))
  Vue.component('detail-nova-multi-date', require('./components/DetailField'))
  Vue.component('form-nova-multi-date', require('./components/FormField'))
})
