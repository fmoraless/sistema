@extends('principal')
@section('contenido')
<template v-if="menu==0">
    <div class="div">
    <h1>Contenido menu 0</h1>
    </div>
</template>
<template v-if="menu==1">
    <categoria></categoria>
</template>
<template v-if="menu==2">
    <h1>Contenido menu 2</h1>
</template>
<template v-if="menu==3">
    <h1>Contenido menu 3</h1>
</template>
<template v-if="menu==4">
    <h1>Contenido menu 4</h1>
</template>
<template v-if="menu==5">
    <h1>Contenido menu 5</h1>
</template>
<template v-if="menu==6">
    <h1>Contenido menu 6</h1>
</template>
<template v-if="menu==7">
    <h1>Contenido menu 7</h1>
</template>
<template v-if="menu==8">
    <h1>Contenido menu 8</h1>
</template>
<template v-if="menu==9">
    <h1>Contenido menu 9</h1>
</template>
<template v-if="menu==10">
    <h1>Contenido menu 10</h1>
</template>
<template v-if="menu==11">
    <h1>Contenido menu 11</h1>
</template>
<template v-if="menu==12">
    <h1>Contenido menu 12</h1>
</template>

       @endsection