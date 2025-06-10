<style type="text/css">
@foreach ($groupedColorVariables as $selector => $colorVariables)
    {{ $selector }} {@foreach ($colorVariables ?? [] as $colorVariableName => $colorVariableValue)--{{ $colorVariableName }}:{!! $colorVariableValue !!};@endforeach}
@endforeach
</style>
