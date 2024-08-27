<script setup>
import {onMounted, ref} from "vue";
import Konva from "konva";

const stage = ref(null)
const layer = ref([])

onMounted(() => {
  stage.value = new Konva.Stage({
    container: 'container',
    width: 400,
    height: 400
  })

  layer.value.push(new Konva.Layer())
  layer.value.push(new Konva.Layer())

  const shape = new Konva.Rect({
    x: 20,
    y: 20,
    width: 100,
    height: 50,
    fill: 'green',
    stroke: 'black',
    strokeWidth: 4,
  })

  const shape2 = new Konva.Rect({
    x: 150,
    y: 40,
    width: 100,
    height: 50,
    fill: 'red',
    shadowBlur: 10,
    cornerRadius: 10,
  });

  layer.value[0].add(shape)
  layer.value[1].add(shape2)

  stage.value.add(layer.value[0])
});

const exportImg = () => {
  layer.value[0].scale({x: 2, y: 2})
  layer.value[0].size({width: 800, height: 800})
  console.log(layer.value[0].toDataURL({width: 800, height: 800, mimeType: 'image/png'}))

  stage.value.removeChildren()
  stage.value.add(layer.value[1])
  layer.value[1].scale({x: 2, y: 2})
  layer.value[1].size({width: 800, height: 800})
  console.log(layer.value[1].toDataURL({width: 800, height: 800, mimeType: 'image/png'}))
}
</script>

<template>

  <div id="container" style="border: 1px solid; width: 400px; height: 400px; display: none"></div>
  <button @click="exportImg">Click</button>
</template>

<style scoped>
h1 {
  font-weight: 500;
  font-size: 2.6rem;
  position: relative;
  top: -10px;
}

h3 {
  font-size: 1.2rem;
}

.greetings h1,
.greetings h3 {
  text-align: center;
}

@media (min-width: 1024px) {
  .greetings h1,
  .greetings h3 {
    text-align: left;
  }
}
</style>
