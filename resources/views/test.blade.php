@extends('layouts.master')

@section('content')

<!-- Vue component -->

  <div>
    This is test
    <multiselect v-model="value" :options="options"></multiselect>
  </div>

<script>
  import Multiselect from 'vue-multiselect'

  // register globally
  Vue.component('multiselect', Multiselect)

  export default {
    // OR register locally
    components: { Multiselect },
    data () {
      return {
        value: Haroon,
        options: ['list', 'of', 'options']
      }
    }
  }
</script>

<!-- New step!
     Add Multiselect CSS. Can be added as a static asset or inside a component. -->
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<style>

</style>
@endsection
