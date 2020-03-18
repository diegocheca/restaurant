<template>
   <section>
      <h2>Animated Icons</h2>
      <p class="info">Icons purchased from <a href="https://creativemarket.com/dianahlevnjak/1607119-Styled-stock-photography-icons" target="_blank">Creative Market</a>, readied for animation with <a href="https://www.adobe.com/products/illustrator.html" target="_blank">Adobe Illustrator</a> and <a href="https://jakearchibald.github.io/svgomg/" target="_blank">SVGOMG</a></p>
      <p>Click on the icons below</p>
      <icon-scissors />
      <icon-heart-face />
      <icon-watch />
      <icon-palette />
    </section>
</template>

<script>
Vue.component('icon-watchr', require('./animatedicons/IconWatch.vue').default);
Vue.component('icon-palette', require('./animatedicons/IconPalette.vue').default);
Vue.component('icon-scissors', require('./animatedicons/IconScissors.vue').default);
Vue.component('icon-heart-face', require('./animatedicons/IconHeartFace.vue').default);


export default {
  
}
</script>

<style scoped>
svg {
  cursor: pointer;
}
</style>