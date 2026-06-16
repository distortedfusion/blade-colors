<!-- DDFSN Styles -->
<style>
:root.dark {color-scheme: dark;}
@foreach ($groupedColorVariables as $selector => $colorVariables)
{{ $selector }} {@foreach ($colorVariables ?? [] as $colorVariableName => $colorVariableValue)--{{ $colorVariableName }}:{!! $colorVariableValue !!};@endforeach}
@endforeach
</style>
