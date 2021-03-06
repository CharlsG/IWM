class Spend < ActiveRecord::Base
  validates :tipo, presence: true
  validates :importe, presence: true, numericality: true
  
  belongs_to :proyect
  belongs_to :user
  has_attached_file :ticket, :styles => { :medium => "900x600>", :thumb => "600x900>" }, :default_url => "/images/:style/missing.png"
  validates_attachment_content_type :ticket, :content_type => /\Aimage\/.*\Z/
  
  def self.to_csv(options = {})
  	file = CSV.generate(options) do |csv|
  		csv << column_names
  		all.each do |products|
  			csv << products.attributes.values_at(*column_names)
  		end	
  	end
    mime_type = selected_format.downcase # can be either `xls` or `csv`
    send_data file, type: mime_type, filename: filename, disposition: 'attachment'
  end

end
