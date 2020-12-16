public function update(Request $request, $id)
    {
        try {
            $record = Product::findOrFail($id);
            $record->name = $request->name;
            $record->description = $request->description;
            $record->save();
    
            return response()->json(['status' => true, 'message' => 'Successfully updated']);
        } catch (\Exception $e) {
            return response()->json(['status' => false]);
        }
    }
