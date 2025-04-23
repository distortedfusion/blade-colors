<style type="text/css">
@foreach ($groupedColorVariables as $theme => $colorVariables)
    {{ $theme === 'root' ? ':' : '.' }}{{ $theme }} {@foreach ($colorVariables ?? [] as $colorVariableName => $colorVariableValue)--{{ $colorVariableName }}:{!! $colorVariableValue !!};@endforeach}
@endforeach
</style>
