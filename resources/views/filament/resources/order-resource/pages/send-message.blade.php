<x-filament::page>
  <input type="text"
    class="block w-25 transition duration-75 rounded-lg shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 dark:bg-gray-700 dark:text-white dark:focus:border-primary-500 border-gray-300 dark:border-gray-600"
    x-bind:class="{
  'border-gray-300': ! ('data.price' in $wire.__instance.serverMemo.errors),
  'dark:border-gray-600': ! ('data.price' in $wire.__instance.serverMemo.errors) &amp;&amp; true,
  'border-danger-600 ring-danger-600': ('data.price' in $wire.__instance.serverMemo.errors),
  'dark:border-danger-400 dark:ring-danger-400': ('data.price' in $wire.__instance.serverMemo.errors) &amp;&amp; true,
}">
</x-filament::page>