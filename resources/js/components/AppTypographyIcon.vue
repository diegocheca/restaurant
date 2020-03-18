<template>
  <section>
    <h2>Regular Icons</h2>
    <p class="info">All found on <a href="https://icomoon.io/" target="_blank">Icomoon</a>, using the Vicons set</p>
    <p>
      <!--you can pass in a smaller width and height as props-->
      <icon-base width="12" height="12" icon-name="write"><icon-write /></icon-base> 
      <!--or you can use the default, which is 18-->
      <icon-base icon-name="write"><icon-write /></icon-base>
      <!--or make it a little bigger too :) -->
      <icon-base width="30" height="30" icon-name="write"><icon-write /></icon-base>
      <br>
      You can make inline icons of any size by passing props.
    </p>
    <p style="color:red">
      <!--you can change the color of the text, and the icons will automatically change color as well-->
      <icon-base icon-name="moon"><icon-moon /></icon-base>
      These red inline icons are automatically styled according to the text color.
    </p>
    <p>
      <!--because the base is consistent, you can use multiple icons on the same line and they're all in order-->
      <icon-base icon-name="moon"><icon-moon /></icon-base>
      <icon-base icon-name="ticks"><icon-tick /></icon-base>
      <icon-base icon-name="write"><icon-write /></icon-base>
      <icon-base icon-name="image"><icon-image /></icon-base>
      <icon-base icon-name="garbage"><icon-garbage /></icon-base>
      <icon-base icon-name="calendar"><icon-calendar /></icon-base>
      <icon-base icon-name="envelope"><icon-envelope /></icon-base>
      <br>
      <icon-base><icon-box /></icon-base>
      You can use whatever icon you want and keep the base consistent with slots
    </p>
  </section>
</template>

<script>
  Vue.component('icon-base', require('./IconBase.vue').default);
  Vue.component('icon-tick', require('./icons/ticks.vue').default);
  Vue.component('icon-envelope', require('./icons/IconEnvelope.vue').default);
  Vue.component('icon-calendar', require('./icons/IconCalendar.vue').default);
  Vue.component('icon-garbage ', require('./icons/IconGarbage.vue').default);
  Vue.component('icon-image', require('./icons/IconImage.vue').default);
  Vue.component('icon-write ', require('./icons/IconWrite.vue').default);
  Vue.component('icon-moon', require('./icons/IconMoon.vue').default);
  Vue.component('icon-box', require('./icons/IconBox.vue').default);


export default {
}
</script>

