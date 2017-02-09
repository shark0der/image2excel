Sub colorize()

    Dim rng As range
    Dim row As range
    Dim c As range
    Dim x As Long
    Dim y As Long
    Dim val As String
    Dim red, green, blue As Integer

    Set rng = range("A1:WB600")

    For x = 1 To rng.Rows.Count
       For y = 1 To rng.Columns.Count
            Set c = rng.Cells(x, y)
            val = CStr(c.Value2)
            red = CLng("&H" & Mid(val, 1, 2))
            green = CLng("&H" & Mid(val, 3, 2))
            blue = CLng("&H" & Mid(val, 5, 2))
            c.Interior.Color = RGB(red, green, blue)
        Next y
    Next x

End Sub

