
class HTMLProcessor

    def start_parsing(scope_name)
        @line = ""
        @offset = 0
        @text = []
    end

    def end_parsing(scope_name)
        @text.each_with_index do |line, index|
            @text[index] = "<span class=\"l l-#{index+1} #{scope_name.gsub('.', ' ')}\">"
        end
        puts @text.join("")
end

x = nil
x = false
x = __dir__
x = __FILE__
x.to_s
x = String.new("x")
x = "x%dy\nz"
x = "a#{X.inspect}b"
x = "y".freeze
x = /^\/?(a|b|c|\(\w*\))/
x = merge(
  "a" => x.y,
  "b" => X.y
)
